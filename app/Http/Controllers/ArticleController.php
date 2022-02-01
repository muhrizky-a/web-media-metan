<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
 
class ArticleController extends Controller
{

    public function create(Request $request){
        $title = $request->input('title');
        $category = $request->input('category');
        $author = $request->input('journalist');
        $content = $request->input('content');
        $file = $request->file('image');
        $caption = $request->input('image-caption');
    
        $tujuan_upload = 'article/images';
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

    public function getAll($paginate){
        //Atur penggunaan pagination
        
        $artikel = ( isset($paginate)) ? Article::paginate($paginate) : Article::all();
        

        foreach($artikel as $a) {
            $i = 0;
            $clean_content = "";

            $dirty_content_array = explode(" ", $a->content); // Memisahkan kata-kata content dalam bentuk array
            foreach($dirty_content_array as $dca) {

                // Ambil 50 kata pertama dan gabungkan dengan clean_content
                if($i <= 50){
                    $clean_content .= " " . $dca;
                    $i += 1;
                }
            }
            $a->content = $clean_content . " . . .";
        }

        $data = array(
            'article_list' => $artikel
        );

        return $data;
    }

    private function getArticleById($id){
        //Cari artikel dengan link
        $article_detail = Article::find($id);

        //Ambil kategori
        $category = Category::where('id', $article_detail->category_id)->firstOrFail();
        $article_detail->category = $category->name;
        $article_detail->category_link = $category->link;

        $new_created_datetime = new \DateTime($article_detail->created_at);
        $new_updated_datetime = new \DateTime($article_detail->updated_at);

        $article_detail->formated_created_date = $new_created_datetime->format("d F Y H:i:s");
        $article_detail->formated_updated_date = $new_updated_datetime->format("d F Y H:i:s");

        $data = array(
            'article_detail' => $article_detail
        );
        return $data;
    }

    private function getArticleByName($link){
        //Cari artikel dengan link
        $article_detail = Article::where('link', $link)->firstOrFail();

        //Ambil kategori
        $category = Category::where('id', $article_detail->category_id)->firstOrFail();

        $article_detail->category = $category->name;
        $article_detail->category_link = $category->link;
        $new_created_datetime = new \DateTime($article_detail->created_at);
        $new_updated_datetime = new \DateTime($article_detail->updated_at);

        $article_detail->formated_created_date = $new_created_datetime->format("d F Y H:i:s");
        $article_detail->formated_updated_date = $new_updated_datetime->format("d F Y H:i:s");

        $data = array(
            'article_detail' => $article_detail
        );
        return $data;
    }
 
    public function article_detail($name){
        try {
        $data = $this->getArticleByName($name);
        return view('article-detail', $data);
        } catch (\Exception $e) {
            return redirect()->route('home');
        }
    }

    public function edit_article($id){
        return view('home.edit_article', $this->get_article($id));
    }

     public function proses_edit_article(Request $request){

        $judul = $request->input('judul');
        $jenis_artikel = $request->input('tipe');
        $isi_artikel = $request->input('isi');


        $article_update = Article::find( $request->input('id') );
        $article_update->title = $judul;
        $article_update->article_type = $jenis_artikel;
        $article_update->content = $isi_artikel;

        $article_update->save();

        echo "<script type='text/javascript'>
            alert('Update Data Berhasil');
        </script>";

        return redirect()->route('article.list');
    }

     public function delete_article($id){
        $article_delete = Article::find($id);
        $article_delete->delete();
        
        echo "<script type='text/javascript'>
            alert('Hapus Data Berhasil');
        </script>";
        return redirect()->route('article.list');
    }

    public function error(){
        return view('home.error');
    }

}
