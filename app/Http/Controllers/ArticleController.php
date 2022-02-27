<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Http\Controllers\CookieController;
use App\Models\Category;

class ArticleController extends Controller
{

    public function create(Request $request)
    {
        $title = $request->input('title');
        $category = $request->input('category');
        $author = $request->input('journalist');
        $content = $request->input('content');
        $file = $request->file('image');
        $caption = $request->input('image-caption');

        $tujuan_upload = 'img/article';
        // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $artikel_baru = new Article();
        $artikel_baru->title = $title;
        $artikel_baru->link = (new Functions)->createLink($title);
        $artikel_baru->category_id = $category;
        $artikel_baru->journalist_id = $author;
        $artikel_baru->image_url = $file->getClientOriginalName();
        $artikel_baru->image_caption = $caption;
        $artikel_baru->content = $content;

        $artikel_baru->save();
        return redirect()->route('admin.article.list');
    }

    public static function getAll()
    {
        $article = Article::with(['category', 'journalist', 'comments', 'page_views'])->get();

        foreach ($article as $a) {
            $i = 0;
            $clean_content = "";

            $dirty_content_array = explode(" ", $a->content); // Memisahkan kata-kata content dalam bentuk array
            foreach ($dirty_content_array as $dca) {

                // Ambil 20 kata pertama dan gabungkan dengan clean_content
                if ($i <= 20) {
                    $clean_content .= " " . $dca;
                    $i += 1;
                }
            }
            $a->content = $clean_content . " . . .";
        }

        return $article;
    }

    public function get($article)
    {
        $article->load('category', 'journalist', 'comments', 'page_views');

        $new_created_datetime = new \DateTime($article->created_at);
        $new_updated_datetime = new \DateTime($article->updated_at);

        $article->formated_created_date = $new_created_datetime->format("d F Y H:i:s");
        $article->formated_updated_date = $new_updated_datetime->format("d F Y H:i:s");
        return $article;
    }

    public static function searchArticle($q)
    {
        return Article::with(['category'])
            ->where(
                function ($query) use ($q) {
                    $query->where('title', 'Like', "%$q%")
                        ->orWhere('content', 'Like', "%$q%");
                }
            )
            ->orderBy('created_at', 'desc')
            ->paginate(5);
    }

    public static function getWithCategory(Category $category)
    {
        return  Article::where('category_id', $category->id)
            ->orderBy('created_at', 'desc');
    }


    public function admin_article_list()
    {
        $articles = Article::with(['category'])->orderBy('created_at', 'desc')->paginate(5);

        foreach ($articles as $a) {
            $i = 0;
            $clean_content = "";

            $raw_contents = explode(" ", $a->content); // Memisahkan kata-kata content dalam bentuk array
            foreach ($raw_contents as $raw_content) {

                // Ambil 20 kata pertama dan gabungkan dengan clean_content
                if ($i <= 20) {
                    $clean_content .= " " . $raw_content;
                    $i += 1;
                }
            }

            $a->content = $clean_content . " . . .";
        }

        return view('admin.article.list', [
            'articles' => $articles,
        ]);
    }

    public function article_insert()
    {
        return view('admin.article.insert', [
            'categories' => (new CategoryController)->getAll(),
            'journalists' => (new JournalistController)->getAll()
        ]);
    }

    public function admin_article_detail(Article $article)
    {
        $article = $this->get($article);

        return view('admin.article.detail', [
            'article_detail' => $article,
        ]);
    }


    public function article_detail(Article $article, Request $request)
    {

        try {
            $article = $this->get($article);

            //Tambah jumlah baca artikel
            $cookie = CookieController::getCookie($request, $article->id);

            if (!$cookie) {
                $cookie = CookieController::setCookie($request, $article->id);
                ArticlePageViewController::create($article->id);
            }

            return view('home.article.detail', [
                'article' => $article,
                'related_articles' => CategoryController::get($article->category)->article->sortByDesc('created_at')->take(3)
            ]);
        } catch (\Exception $e) {
            //return redirect()->route('home');
        }
    }

    public function admin_article_update(Article $article)
    {
        $article_detail = $this->get($article);
        $categories = (new CategoryController)->getAll();
        $journalists = (new JournalistController)->getAll();


        return view('admin.article.update', [
            'article_detail' => $article_detail,
            'categories' => $categories,
            'journalists' => $journalists
        ]);
    }

    public function update(Request $request, Article $article)
    {
        $title = $request->input('title');
        $category = $request->input('category');
        $author = $request->input('journalist');
        $content = $request->input('content');
        $caption = $request->input('image-caption');

        /*
        $file = $request->file('image');
        $tujuan_upload = 'article-images';
        // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());
        */

        $article->update([
            'title' => $title,
            'category_id' => $category,
            'journalist_id' => $author,
            'image_caption' => $caption,
            'content' => $content
        ]);

        return redirect()->route('admin.article.detail', $article);
    }

    public function delete(Article $article)
    {
        $article->delete();

        echo "<script type='text/javascript'>
            alert('Hapus Data Berhasil');
        </script>";
        return redirect()->route('admin.article.list');
    }
}
