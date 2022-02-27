<!-- Footer -->
<footer class="footer text-white bg-dark">
    <div class="container px-3 py-3 d-flex justify-content-between">
        <div class="copyright">
            <ul class="copyright list-group" style="list-style: none">
                <li>Copyright &copy; {{ date('Y') }} PT Metan Indo Production</li>
                <li>Supported by Wana</li>
            </ul>
        </div>

        <div class="footer-link">
            <a href="{{ route('footer', 'tentang-kami') }}" class="me-2">Tentang Kami</a>
            <a href="{{ route('footer', 'kontak') }}" class="me-2">Kontak</a>
            <a href="{{ route('footer', 'redaksi') }}" class="me-2">Redaksi</a>
            <a href="{{ route('footer', 'pedoman-media-siber') }}" class="me-2">Pedoman Media Siber</a>
        </div>
    </div>
</footer>
<!-- End of Footer -->
