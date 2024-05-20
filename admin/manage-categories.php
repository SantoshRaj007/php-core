<?php 

    include_once "../includes/config.php"; 

    $category = mysqli_query($connect, "select * from categories");
    $count = mysqli_num_rows($category);
    
?>

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
                <div class="w-7/12">
                    <h2 class="my-5 text-2xl font-semibold text-[#145c85]">Manage Categories (<?= $count; ?>)</h2>
                    <table class="w-full">
                        <tr>
                            <th class="p-2 border">Id</th>
                            <th class="p-2 border">Title</th>
                            <th class="p-2 border">Description</th>
                            <th class="p-2 border">Action</th>
                        </tr>
                        <?php 
                                                    
                            while($row = mysqli_fetch_array($category)):
                        ?>
                        <tr>
                            <td><?= $row['cat_id'];?></td>
                            <td><?= $row['cat_title'];?></td>
                            <td><?= $row['cat_desc'];?></td>
                            <td class="flex flex-1 gap-2 items-center justify-center">
                                <a href="" class="bg-[#145c85] text-[#edeef5] hover:bg-[#ef5151] px-2 py-1 rounded">Edit</a>
                                <a href="" class="bg-[#ef5151] text-[#edeef5] hover:bg-[#145c85] px-2 py-1 rounded">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </table>
                </div>
                <div class="w-5/12">
                <h2 class="my-5 text-2xl font-semibold text-[#145c85]">Insert Categories</h2>
                    <div class="bg-[#edeef5] border p-4">
                        <form action="" method="post" class="flex flex-col gap-3">
                            <div class="mb-3">
                                <label for="" class="font-semibold text-[#145c85]">Category Title</label>
                                <input type="text" name="cat_title" class="border w-full px-3 py-2" placeholder="Enter Category Title">
                            </div>

                            <div class="mb-3">
                                <label for="" class="font-semibold text-[#145c85]">Category Description</label>
                                <textarea type="text" rows="5" name="cat_desc" class="border w-full px-3 py-2"></textarea>
                            </div>

                            <div class="mb-3">
                                <input type="submit" name="submit" class="bg-[#ef5151] text-[#edeef5] hover:bg-[#145c85] hover:text-[#edeef5] px-3 py-2 rounded-lg w-full cursor-pointer" value="Insert Category">
                            </div>
                        </form>

                        <?php 
                            if(isset($_POST['submit'])) {
                                $cat_title = $_POST['cat_title'];
                                $cat_desc = $_POST['cat_desc'];

                                $query = mysqli_query($connect, "insert into categories (cat_title, cat_desc) value('$cat_title', '$cat_desc')");

                                if($query) {
                                    redirect_to("manage_categories.php");
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>