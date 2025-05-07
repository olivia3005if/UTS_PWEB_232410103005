<footer class="bg-dark text-light py-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5><span class="text-danger">K</span>Drama Manager</h5>
                <p class="small">Your ultimate platform for managing Korean drama collections.</p>
            </div>
            <div class="col-md-3">
                <h6>Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('dashboard') }}" class="text-decoration-none text-light">Dashboard</a></li>
                    <li><a href="{{ route('pengelolaan') }}" class="text-decoration-none text-light">Drama List</a></li>
                    <li><a href="{{ route('profile') }}" class="text-decoration-none text-light">Profile</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6>Connect</h6>
                <div class="d-flex gap-3">
                    <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p class="mb-0">&copy; {{ date('Y') }} KDrama Manager. All rights reserved.</p>
        </div>
    </div>
</footer>
