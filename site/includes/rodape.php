</main>

<footer>
    <p>Site desenvolvido para o curso de
        <b>Técnico de informática para Internet</b>
    </p>
    <p>Senac Penha &copy; 2022</p>
    <?php 
    date_default_timezone_set ('America/Sao_Paulo');
    $date = date("d/m/Y H:i");

    ?>
    <p>Acesso feito em  <time><?=$date?></time></p>
</footer>

</body>
</html>