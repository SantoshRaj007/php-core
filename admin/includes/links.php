<div class="flex flex-col bg-[#edeef5] h-[95vh]">
    <?php
        $pages = array(
            'Dashboard'     => 'index.php',
            'Manage Categories' => 'manage-categories.php',
            'Manage Product' => 'manage-product.php',
            'Insert Product'  => 'contact.php',
            'Manage Order'    => 'about.php',
            'Manage Users' => 'manage-user.php',
            'Manage Payments' => 'manage-payment.php',
            'Setting' => 'setting.php'
        );

        $active = basename($_SERVER['PHP_SELF']);

        foreach ($pages as $title => $url) {
            if ($active === $url) {
                echo '<a href="'.$url.'" class="w-full py-4 px-5 flex items-center font-semibold bg-[#145c85] text-[#edeef5]">'.$title.'</a>';
            } else {
                echo '<a href="'.$url.'" class="w-full py-4 px-5 flex items-center text-[#323233] font-[600] hover:bg-[#ef5151] hover:text-[#edeef5]">'.$title.'</a>';
            }
        }
    ?>
</div>