<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Kategori - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        .card {
            background-color: #1e1e1e;
            border: 1px solid #333;
        }
        .table {
            color: #e0e0e0;
        }
        .table-striped>tbody>tr:nth-of-type(odd)>* {
            background-color: #252525;
            color: inherit;
        }
        .form-control, .form-select {
            background-color: #2d2d2d;
            border-color: #444;
            color: #f0f0f0;
        }
        .form-control:focus {
            background-color: #333;
            border-color: #555;
            color: #fff;
            box-shadow: 0 0 0 0.25rem rgba(100, 100, 100, 0.25);
        }
        .btn-close {
            filter: invert(1);
        }
        .alert {
            border: 1px solid transparent;
        }
        .pagination .page-link {
            background-color: #252525;
            border-color: #444;
            color: #e0e0e0;
        }
        .pagination .page-item.active .page-link {
            background-color: #555;
            border-color: #666;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tambahkan toggle dark mode jika diperlukan
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.createElement('button');
            themeToggle.className = 'btn btn-sm btn-outline-secondary position-fixed bottom-0 end-0 m-3';
            themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            themeToggle.onclick = function() {
                const html = document.documentElement;
                if (html.getAttribute('data-bs-theme') === 'dark') {
                    html.removeAttribute('data-bs-theme');
                    this.innerHTML = '<i class="fas fa-moon"></i>';
                } else {
                    html.setAttribute('data-bs-theme', 'dark');
                    this.innerHTML = '<i class="fas fa-sun"></i>';
                }
            };
            document.body.appendChild(themeToggle);
        });
    </script>
</body>
</html>