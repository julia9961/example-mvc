<section>
    <ul>
        <li><a href="#">Главная</a></li> &rarr;
        <li><a href="#">Сферические товары</a></li>
    </ul>
    <h3>список сферических товаров</h3>

    <form method="post" action="">
        <table border="1" name="outputTable">
            <tr >
                <td> Наименование
                    <form action="" method="post">
                        <button type="submit" value="sort" name="button" class="sortArray">&#9660;</button>
                    </form>
                </td>
                <td> Код товара</td>
                <td> Категория товара</td>
                <td> Описание товара</td>
            </tr>
            <?php

            for ($i = 0, $size = count($data); $i < $size; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 4; $j++) {
                    echo "<td>" . $data[$i][$j] . "</td>";
                }
            }

            echo "</tr>";

            ?>

            </tr>
        </table>
    </form>

</section>

<div class="footer-background">
    <footer>
        <nav>
            <ul>
                <li><a href="#">поиск</a></li>
                <li><a href="#">карта сайта</a></li>
            </ul>
            <small>&copy; Homs & Hooves, 2014</small>
        </nav>
    </footer>
</div>

</body>
</html>