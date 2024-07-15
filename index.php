<?php
$str = "";
$strC = "";
$strL = "";
if (isset($_POST["submit"])) {
    $str = $_POST["name"];
    if ($strC = str_word_count("$str"))
        ;
    // echo $strC;
} {
    if ($strL = preg_match_all('/[^ ]/', $str, $matches))
        ;
    // echo $strL;
}
?>


<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Counter</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="lg:container mx-auto bg-base-200  ">
    <header class="flex items-center justify-center font-semibold lg:p-9 bg-base-200">
        <div class="border border-white bg-white w-full p-4 lg:px-52 rounded-lg mt-8 shadow-lg">
            <h2 class="text-lg text-center">WORD COUNTER</h2>
        </div>
    </header>
    <main class="">
        <div class="hero bg-base-200">

            <div class="hero-content flex-col lg:flex-row-reverse">

                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl ">
                    <div class=" flex flex-col items-start  bg-white p-8 border rounded-lg ">
                        <div class="flex gap-2 text-center justify-center">
                            <p class="flex mb-4 text-lg">Your text:
                            </p>
                            <span class="font-semibold text-lg"><?php echo ' ' . "$str" ?></span>
                        </div>
                        <p class="">
                            word : <span class="font-bold"><?php echo "$strC" ?></span>

                        </p>
                        <p>letter : <span class="font-bold"><?php echo "$strL" ?></span></p>
                    </div>
                </div>


                <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                    <form class="card-body" action="" method="post">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Input field</span>
                            </label>
                            <input type="text" name="name" placeholder="Write your text..." class="input input-bordered"
                                required />
                        </div>

                        <div class="form-control mt-6">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>

</body>

</html>