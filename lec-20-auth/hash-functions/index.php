<style>
    td,
    th {
        text-align: left;
    }
</style>

<h1>SHA1</h1>
<table>
    <tr>
        <td>password</td>
        <td><?= sha1("password") ?></td>
        <td><?= strlen(sha1("password")) ?></td>
    </tr>
    <tr>
        <td>people</td>
        <td><?= sha1("people") ?></td>
        <td><?= strlen(sha1("people")) ?></td>
    </tr>
    <tr>
        <td>abc</td>
        <td><?= sha1("abc") ?></td>
        <td><?= strlen(sha1("abc")) ?></td>
    </tr>
    <tr>
        <td>nobodywillEVERguessth1s!!!</td>
        <td><?= sha1("nobodywillEVERguessth1s!!!") ?></td>
        <td><?= strlen(sha1("nobodywillEVERguessth1s!!!")) ?></td>
    </tr>
</table>

<hr>

<h1>MD5</h1>
<table>
    <tr>
        <td>password</td>
        <td><?= md5("password") ?></td>
        <td><?= strlen(md5("password")) ?></td>
    </tr>
    <tr>
        <td>people</td>
        <td><?= md5("people") ?></td>
        <td><?= strlen(md5("people")) ?></td>
    </tr>
    <tr>
        <td>abc</td>
        <td><?= md5("abc") ?></td>
        <td><?= strlen(md5("abc")) ?></td>
    </tr>
    <tr>
        <td>nobodywillEVERguessth1s!!!</td>
        <td><?= md5("nobodywillEVERguessth1s!!!") ?></td>
        <td><?= strlen(md5("nobodywillEVERguessth1s!!!")) ?></td>
    </tr>
</table>