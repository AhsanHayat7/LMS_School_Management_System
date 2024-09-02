 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ url('/home/dashboard') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>LMS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('dashboard/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('/home/dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Students</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('students.create')}}" class="dropdown-item">New Students</a>
                    <a href="{{route('students')}}" class="dropdown-item">See All Students</a>

                </div>
            </div>
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Teachers</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="{{route('teachers.create')}}" class="dropdown-item">New Teachers</a>
                <a href="{{route('teachers')}}" class="dropdown-item">See All Teachers</a>

            </div>
        </div>
        <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Classes</a>
        <div class="dropdown-menu bg-transparent border-0">
            <a href="{{route('classes.create')}}" class="dropdown-item">New Classes</a>
            <a href="{{route('classes')}}" class="dropdown-item">See All Classes</a>

        </div>
    </div>
    <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Subjects</a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="{{route('students.create')}}" class="dropdown-item">New Subjects</a>
        <a href="#" class="dropdown-item">See All Subjects</a>

    </div>
</div>

        </div>
    </nav>
</div>
