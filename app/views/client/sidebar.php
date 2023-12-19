<?php

    //  session_start();
    $username = $_SESSION["username"];

?>

<section class="w-[17.5%] h-full bg-blue-800 text-white">
  
    <div class="w-[70%] m-auto flex flex-col justify-between mt-10 text-black text-xl">

    <li class="my-2">
                    <a href="../../app/views/client/index.php"
                        class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid fa-user mr-5 text-lg group-hover:text-red-500"></i><span
                            class="hidden sm:inline-block">Users</span></a>
                </li>
        <!-- <a href="index.php?id=<?=$id ?>" class="h-[5vh] bg-white rounded-lg"><button
                class="w-full flex items-center h-full" type="button"><span class="w-[70%] md:w-[20%]"><i
                        class="fa-solid fa-table" style="color: #000;"></i></span><span
                    class=" h-full border-black border-l-8"></span><span
                    class="hidden md:block w-[80%] font-extrabold">Comptes</span></button></a> -->

                    <li class="my-2">
                    <a href="../../app/views/client/transaction.php"
                        class="text-lg font-medium block w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-red-500 bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid "></i>
                        <i class="fa-solid fa-right-left mr-5 text-lg group-hover:text-red-500"></i><span
                            class="hidden sm:inline-block">Transactions</span></a>
                </li>



        <!-- <a href="transaction.php?id=<?=$id ?>" class="h-[5vh] bg-white rounded-lg mt-10"><button
                class="w-full flex items-center h-full" type="button"><span class="w-[70%] md:w-[20%]"><i
                        class="fa-solid fa-arrow-right-arrow-left" style="color: #000;"></i></span><span
                    class=" h-full border-black border-l-8"></span><span
                    class="hidden md:block w-[80%] font-extrabold">Tranasctions</span></button></a> -->

    </div>
</section>