<aside class="delicious-burger"><?php
    $str = "🍔";
for ($i = 0; $i < 5; $i++) {
    echo $str++;
    echo "\n";
}
?></aside>
<style>
    .delicious-burger {
        box-sizing: border-box;
        padding: 4rem;
        font-size: 1.8rem;
        text-shadow: rgba(0%, 0%, 0%, 0.5) 0 0 0.5rem;
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        max-width: 20rem;
        background: radial-gradient(
                ellipse 50% 100% at 25% 90%,
                transparent 40%,
                orange 0 60%,
                transparent 0
        ) bottom 2rem right 0 / 50% no-repeat,
        radial-gradient(
                ellipse 50% 100% at 75% 90%,
                transparent 40%,
                orange 0 60%,
                transparent 0
        ) bottom 2rem left 0 / 50% no-repeat red;
        border-radius: 1rem;
        color: #fff;
    }
</style>
