<?php include_once "../includes/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= PROJECT_NAME; ?> | Admin Panel</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <?php include_once "includes/adminHeader.php"; ?>
    <div class="w-full flex-1 flex">
        <div class="w-1/6">
            <?php require_once "includes/links.php"; ?>
        </div>

        <div class="w-5/6">
            <div class="flex p-10 gap-10">
                <div class="w-full">
                    <div class="flex justify-between items-center">
                        <h2 class="my-5 text-2xl font-semibold text-[#145c85]">Manage Product (2)</h2>
                        <a class="bg-[#ef5151] text-[#edeef5] hover:bg-[#145c85] hover:text-[#edeef5] px-3 py-2 rounded cursor-pointer">Add Product</a>
                    </div>
                    <table class="w-full">
                        <tr>
                            <th class="p-2 border">Id</th>
                            <th class="p-2 border">Title</th>
                            <th class="p-2 border">Brand</th>
                            <th class="p-2 border">Price</th>
                            <th class="p-2 border">MRP</th>
                            <th class="p-2 border">Action</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>