<section>
    <ul>
        <li><a href="#">Главная</a></li> &rarr;
        <li><a href="#">Сферические товары</a></li>
    </ul>
    <h3>добавление сферического товара</h3>

    <?php if (isset($_POST["button"])):?>
        <div style="color:red;">Товар добавлен!</div>
    <?php endif; ?>

    <form method="post" action="" >
        <table>
            <tr>
                <td>
                    Наименование
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Код товара
                </td>
                <td>
                    <input type="text" name="code">
                </td>
            </tr>
            <tr>
                <td>Категория товара</td>
                <td>
                    <select name="category">
                        <option>Товары сферические вакуумные</option>
                        <option>Товары оригинальные</option>
                        <option>Товары подпольные</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" checked> Популярный товар</td>
                <td></td>
            </tr>
            <tr>
                <td>Описание товара</td>
                <td><textarea name="description"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="добавить" name="button"></td>
            </tr>

    </form>

    <tr>
        <td></td>
        <td>
            <form action="" method="post">
                <input type="submit" value="показать товары" name="button">
            </form>
        </td>
    </tr>


    </table>
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