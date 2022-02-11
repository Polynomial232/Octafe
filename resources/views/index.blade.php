<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <script src="js/jquery.nice-number.min.js"></script>
    <title>Document</title>
</head>

<body>
    <section class="relative mt-10">
        <div class="container-lg grid grid-rows lg:grid-cols-3">
            <div class="grid grid-rows py-5 px-4 m-4 rounded-3xl border-2 border-dashed">
                <div id="atas-card" class="grid grid-cols-3">
                    <div class="lg:col-start-1 lg:col-span-2 col-span-2 md:col-span-1 pr-1 pl-3 lg:order-1 md:order-2">
                        <h2 class="font-bold capitalize tracking-wide"><span
                                class="bg-red-700 rounded-full px-2 py-0.5 text-center text-white font-semibold text-sm">Promo</span>
                            indomie</h2>
                        <p class="font-thin pt-2">Indomie Goreng dapat ditambahkan bermacam macam...</p>
                        <p class="font-bold py-1.5">5.000 <span
                                class="line-through decoration-1 text-stone-600 ml-1">7.000</span>
                        </p>
                    </div>
                    <img src="images/indomie.png" alt=""
                        class="w-96 h-32 object-cover lg:col-start-3 order-2 md:order-1 md:col-start-1">
                    <div
                        class="col-start-3 md:order-3 lg:hidden md:flex justify-end items-center mr-10 text-3xl text-green-500 md:font-bold hidden">
                        <input type="number" value="0" min="0">
                    </div>
                </div>
                <div id="bawah-card" class="px-3 py-0.5 select-none	md:hidden lg:inline">
                    <form action="">
                        <label for="like1" class="cursor-pointer">
                            <input type="checkbox" id="like1" class="peer hidden">
                            <i class="fa-regular fa-heart text-red-600 text-xl peer-checked:hidden"></i>
                            <i class="fa-solid fa-heart text-red-600 text-xl peer-checked:inline hidden"></i>
                        </label>
                        <a class="border-2 border-green-500 rounded-full px-3 py-1 float-right font-bold text-green-600"
                            href="#">Tambah</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="js/nice-number.js"></script>
</body>

</html>
