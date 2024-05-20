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
            <div class="grid grid-cols-4 p-10 mt-5 gap-3">
                <div class="bg-[#603de0] text-[#edeef5] hover:bg-[#ef5151] shadow-lg flex flex-1 flex-col  rounded">
                    <div class="flex items-center p-4 justify-start">
                        <div className="flex flex-col">
                            <h1 class="text-xl">10+</h1>
                            <h6 className="text-[#edeef5] font-semibold">Total Category</h6>
                        </div>
                    </div>
                </div>

                <div class="bg-[#145c85] text-[#edeef5] hover:bg-[#ef5151] shadow-lg flex flex-1 flex-col  rounded">
                    <div class="flex items-center p-4 justify-start">
                        <div className="flex flex-col">
                            <h1 class="text-xl">10+</h1>
                            <h6 className="text-[#edeef5] font-semibold">Total Product</h6>
                        </div>
                    </div>
                </div>

                <div class="bg-[#b4368a] text-[#edeef5] hover:bg-[#ef5151] shadow-lg flex flex-1 flex-col  rounded">
                    <div class="flex items-center p-4 justify-start">
                        <div className="flex flex-col">
                            <h1 class="text-xl">10+</h1>
                            <h6 className="text-[#edeef5] font-semibold">Total Order</h6>
                        </div>
                    </div>
                </div>

                <div class="bg-[#c73a36] text-[#edeef5] hover:bg-[#ef5151] shadow-lg flex flex-1 flex-col  rounded">
                    <div class="flex items-center p-4 justify-start">
                        <div className="flex flex-col">
                            <h1 class="text-xl">10+</h1>
                            <h6 className="text-[#edeef5] font-semibold">Total User</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>