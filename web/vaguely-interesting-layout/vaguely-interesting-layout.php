<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Vaguely Interesting Layout');
?>

    <p class="date-attribution">2010</p>
    <h1>Vaguely Interesting Layout</h1>

    <section class="vaguely">

        <div class="aboveelshape">
            &nbsp;
        </div>


        <div class="elshape">
            Lorem Ipsum Dolor, 2010.
        </div>

        <div class="belowelshape">

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec nunc ac diam tempus imperdiet. Duis ac
                sapien vel justo laoreet faucibus eget nec eros. Proin placerat velit vel lacus porttitor viverra. Proin
                venenatis magna mauris. Nunc vel nisl id nisi ultricies laoreet. Curabitur vel nunc tellus, ac vulputate
                est. Mauris sagittis diam eget augue tincidunt lacinia. Aliquam eros lectus, rhoncus sed vulputate et,
                elementum eget diam. Aliquam in orci neque. Vivamus in nibh vel ante varius accumsan. Quisque porta,
                elit et dapibus molestie, nulla mauris condimentum velit, ut posuere diam mauris eu turpis.
            </p>
            <p>
                Donec pellentesque enim pellentesque libero pharetra vel tempor quam auctor. Duis in diam sed odio
                semper mollis. Etiam vitae rutrum erat. Sed suscipit tellus non neque aliquet eleifend. Phasellus cursus
                augue vitae augue porta adipiscing. Pellentesque at lacus diam, sed auctor neque. Quisque varius leo
                eget velit lacinia bibendum. Nam eu diam lectus, in egestas est. Suspendisse porta iaculis odio a
                iaculis. Proin venenatis sem in nisi varius commodo. Aenean vitae sagittis tellus. Nam a augue ac diam
                elementum venenatis vel at est.
            </p>
            <p>
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In aliquet
                nulla eget risus tempus a iaculis purus rutrum. Sed sagittis mollis fringilla. Nulla mattis molestie
                enim at porttitor. Nam ligula neque, vestibulum et ultricies in, lacinia nec sem. Phasellus
                sollicitudin, odio et egestas pharetra, ipsum nunc gravida arcu, eget pharetra urna tortor non justo.
                Curabitur eget purus massa, ac adipiscing odio. Donec ultrices rutrum lorem et consectetur. Quisque
                volutpat, sem vel blandit rutrum, nisi tellus tristique odio, sit amet cursus mi ligula lobortis diam.
                Donec rhoncus nunc ut orci imperdiet vitae faucibus lorem condimentum. In hac habitasse platea dictumst.
                Proin tempus posuere nunc sit amet auctor. Proin vulputate risus et felis ultrices mollis. Maecenas id
                urna tellus. Ut sagittis ante quis enim scelerisque et mollis mauris fermentum. Aenean condimentum, nisl
                eu lobortis tempor, nibh urna mattis urna, a fermentum neque eros id erat. Phasellus blandit elementum
                hendrerit. In ornare ornare leo, ut eleifend nisi egestas ac. Mauris justo magna, tempor bibendum tempus
                quis, posuere porttitor sem. Nunc ut placerat turpis.
            </p>
            <p>
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris suscipit
                commodo pulvinar. Etiam massa nunc, tincidunt vitae pulvinar ac, pulvinar id augue. Ut malesuada eros a
                augue lobortis hendrerit. Morbi nec luctus tortor. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Nullam nisl sem, rhoncus in sollicitudin mattis, volutpat pretium odio. Cras mollis tellus sit
                amet leo molestie in pellentesque neque consequat. Nunc imperdiet luctus tristique. Fusce sodales, augue
                et commodo imperdiet, nisi lorem luctus tortor, quis luctus dui justo eu mauris. Pellentesque iaculis
                imperdiet tempus. Suspendisse potenti. Vestibulum in tortor nec quam vulputate blandit id eu quam.
                Mauris volutpat, quam vitae interdum eleifend, est turpis feugiat eros, in feugiat diam tortor sit amet
                massa. Phasellus tempus tortor sit amet lacus mattis sed blandit turpis fringilla. Aliquam nibh dolor,
                elementum sed pretium in, vulputate at arcu. Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Sed varius auctor urna, ut fermentum justo pellentesque vel. Aliquam
                nulla nulla, semper vitae vehicula at, volutpat ultrices tellus. Morbi eget arcu nibh.
            </p>
            <p>
                Donec massa tellus, congue at tempus id, suscipit ac nulla. Etiam venenatis dolor sed dui luctus
                gravida. Nam egestas erat sed nulla semper luctus. Donec sed placerat nibh. Praesent leo orci, aliquet
                sit amet tincidunt sit amet, commodo vitae quam. Duis eget tincidunt nunc. Mauris tristique ante et erat
                lobortis sed tempor urna tristique. Sed nibh arcu, pretium eu euismod eleifend, hendrerit sed ipsum.
                Vestibulum augue nibh, convallis sed blandit vel, ultrices at arcu. Aliquam porta volutpat tortor, ac
                volutpat ante semper in. Sed odio odio, ullamcorper ac facilisis vel, blandit sed sapien. Proin feugiat
                pharetra pretium. Vivamus posuere vehicula iaculis. Sed ut purus eros, a tristique turpis. Aenean nec
                cursus diam. In tristique interdum risus, eget egestas lacus pellentesque eu. In hac habitasse platea
                dictumst.
            </p>

        </div>

        <div class="bottomshape">
            &nbsp;
        </div>

    </section>

    <link rel="stylesheet" href="vaguely-interesting-layout.css<?php
    echo '?v=' . filemtime('vaguely-interesting-layout.css');
    ?>">

    <h2>SCSS</h2>

<?php $lab->printCodeBlock(file_get_contents('vaguely-interesting-layout.scss')); ?>


<?php

$lab->printFooter(
    [
        'comments' => true
    ]
);