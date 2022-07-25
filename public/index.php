<?php
    $birthDate  = "2000-09-30";
    $today      = date("Y-m-d");

try {
    $dateA = new DateTime($today);
} catch (Exception $e) {
}
try {
    $dateB = new DateTime($birthDate);
} catch (Exception $e) {
}

$dateDiff   = $dateA->diff($dateB);
    $age        = "$dateDiff->y jarige ";

?>
<!doctype html>
<!--

    Leuk dat je hier ook een kijkje neemt!
    Groet, Kaine

-->
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="styles.css" rel="stylesheet">
        <link rel="icon" href="icons.png"
        <title>Kaine | Website</title>
    </head>
    <body>
        <div>
            <main>
                <div class="relative bg-white overflow-hidden">
                    <div class="max-w-7xl mx-auto">
                        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                            <div class="mt-10 mx-auto w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                                <div class="sm:text-center lg:text-left">
                                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                        <!-- TEKST -->
                                        <span class="block xl:inline">Kaine | Kaine_</span>
                                        <span class="block text-blue-400 text-blue-400 xl:inline">Software Developer</span>
                                    </h1>
                                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                        Hi, welkom op mijn eigen website! <br> Ik ben een <?php echo $age ?> studerende student in 's-Hertogenbosch. <br> Mocht je contact met me willen opnemen, kan dat via de onderstaande knop.</p>
                                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                        <div class="rounded-md shadow">
                                            <a href="mailto:kaineommeren@gmail.com" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-400 hover:bg-blue-400 md:py-4 md:text-lg md:px-10">Email </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOTO -->
                <div class="relative grid grid-cols-6 gap-4 mr-5>
                    <div class="">
                        <img class="max-w-full max-h-30 rounded-full" src="https://media.discordapp.net/attachments/994240638658826300/1000012524034478150/a5f4df87-68aa-4fb2-b32b-8bcdfa6f80a8.JPG?width=377&height=670" alt="foto Kaine">
                    </div>
                </div>
                <div class="py-12 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-1xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <h2 class="mt-2 text-3xl leading-8 tracking-tight text-gray-900 sm:text-4xl">Ervaringen & Hobby's</h2>
                            <p class="block text-center text-blue-400 xl:inline text-4xl">Wat ik graag doe</p>
                        </div>
                        <div class="mt-10">
                            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                                <div class="relative">
                                    <dt>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Programmeren</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">Tijdens het eerste jaar van de studie ben ik vooral bezig geweest met: PHP, SQL, HTML, CSS & JavaScript.<br>
                                        Naast deze talen, programmeer ik in mijn vrije tijd in: Java, LUA & TailwindCSS.</dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Activiteiten</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">Naast al dat binnen zitten ben ik ook graag buiten. <br>
                                    Hier doe ik graag: Longboarden, snowboarden & wakeboarden. </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Interesses</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">In het dagelijks leven ben ik veel bezig met techniek, nieuws in de gaten ervan & de meest recente technieken ontplooien. <br>
                                    </dd>
                                </div>
                                <div class="relative">
                                    <dt>
                                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Vrije tijd</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base text-gray-500">Gamen is sinds klein af aan al een hobby voor me, en dit stream ik graag op mijn <a id="bold" href="https://www.twitch.tv/xkainee" target="_blank">Twitch</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="text-1xl text-center lg:text-left sticky">
                <!-- SOCIALS -->
                <div class="text-center">
                    <a href="https://www.linkedin.com/in/kaine-van-ommeren-8300baa8/" target="_blank" class="fa fa-linkedin"></a>
                    <a href="https://twitter.com/xkainee" target="_blank" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/zkaine/" target="_blank" class="fa fa-instagram"></a>
                </div>
                <div class="text-gray-500 text-center p-4">
                <p>Copyright © 2022 -</p>
                <a href="https://github.com/zkainee" target="_blank">Kaine</a>
                </div>
            </footer>
        </div>
    </body>
</html>
