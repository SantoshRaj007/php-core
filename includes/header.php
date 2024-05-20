<div class="flex flex-1 bg-[#145c85] items-center justify-between px-8 py-2">
    <div class="flex items-center gap-3">
        <button class="text-[#edeef5] bg-transparent hover:text-[#ef5151]" type="button" data-drawer-target="sidebar" data-drawer-show="sidebar" aria-controls="sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

        </button>
        <h1 class="text-3xl text-[#edeef5] font-semibold"><?= PROJECT_NAME; ?></h1>
    </div>

    <form action="" class="flex w-[500px]">
        <input type="search" placeholder="Search product by title...." class="border px-3 py-2 w-full rounded-l-md">
        <input type="submit" value="Go" class="text-[#edeef5] px-3 py-2 rounded-r-md" style="background-color: #ef5151;">
    </form>

    <div class="flex gap-4">
        <a href="" class="text-[#edeef5] items-center flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            Home
        </a>
        <a href="" class="text-[#edeef5]">SignUp</a>
        <a href="" class="text-[#edeef5]">Login</a>
    </div>
</div>