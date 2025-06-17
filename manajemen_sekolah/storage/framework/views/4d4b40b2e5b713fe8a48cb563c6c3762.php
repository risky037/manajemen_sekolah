<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" />

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        .container {
            max-width: 960px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #f8f9fa;
            font-size: 14px;
            color: #6c757d;
            border-top: 1px solid #ddd;
            margin-top: 40px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Manajemen Data Siswa</h1>
    </header>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer>
        &copy; <?php echo e(date('Y')); ?> Aplikasi Siswa. Dibuat dengan ❤️ oleh Developer.
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\manajemen_sekolah\manajemen_sekolah\resources\views/layouts/app.blade.php ENDPATH**/ ?>