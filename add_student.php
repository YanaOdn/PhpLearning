<!DOCTYPE html>
<html>
<head>
    <title>Форма добавления студентов</title>
</head>
<body>
    <form action='/worker.php' method="get">
        <input type=text name=surname placeholder="Фамилия"> <br>
        <input type=text name=name placeholder="Имя"> <br>
        <input type=text name=middle_name placeholder="Отчество"> <br>
        <br>
        <span>Пол:</span>
        М<input type="radio" name="sex" value="male">
        Ж<input type="radio" name="sex" value="female">
        <br>
        <br>
        <input type="date" name="birthday">
        <br>

        <span>Языки:</span>
        <table>
            <tr>
                <td>
                    en<input type="checkbox" name="language" value="ENG" >
                </td>
                <td>
                    ru<input type="checkbox" name="language" value="RUS" >
                </td>
                <td>
                    uz<input type="checkbox" name="language" value="UZ" >
                </td>
            </tr>
            <tr>
                <td>
                    fr<input type="checkbox" name="language" value="FR" >
                </td>
                <td>
                    kz<input type="checkbox" name="language" value="KZ" >
                </td>
                <td></td>
            </tr>
        </table>
        <br>
        Курс: <select name="year">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <br>
        <br>
        <textarea name="comment" placeholder="Комментарий..."></textarea>
        <br>
        <br>
        <input type=submit value="Добавить студента">
    </form>
</body>
</html>