<style>
    td,
    th {
        text-align: left;
        padding: 10px;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<h1>Salted SHA1</h1>
<table>
    <tr>
        <th>text</th>
        <th>salt</th>
        <th>sha1 digest</th>
        <th>digest length</th>
    </tr>
    <tr>

        <td>password</td>
        <td>d95bde9fbd4948ad98216eed55d5e83c</td>
        <td><?= sha1("password" . "d95bde9fbd4948ad98216eed55d5e83c") ?></td>
        <td><?= strlen(sha1("password" . "d95bde9fbd4948ad98216eed55d5e83c")) ?></td>
    </tr>
    <tr>
        <td>people</td>
        <td>edcfa9d051ec11ecbf630242ac130002</td>
        <td><?= sha1("people" . "edcfa9d051ec11ecbf630242ac130002") ?></td>
        <td><?= strlen(sha1("people" . "edcfa9d051ec11ecbf630242ac130002")) ?></td>
    </tr>
</table>

<hr>

<h1>Salted MD5</h1>
<table>
    <tr>
        <th>text</th>
        <th>salt</th>
        <th>md5 digest</th>
        <th>digest length</th>
    </tr>
    <tr>
        <td>password</td>
        <td>d95bde9fbd4948ad98216eed55d5e83c</td>
        <td><?= md5("password" . "d95bde9fbd4948ad98216eed55d5e83c") ?></td>
        <td><?= strlen(md5("password" . "d95bde9fbd4948ad98216eed55d5e83c")) ?></td>
    </tr>
    <tr>
        <td>people</td>
        <td>edcfa9d051ec11ecbf630242ac130002</td>
        <td><?= md5("people" . "edcfa9d051ec11ecbf630242ac130002") ?></td>
        <td><?= strlen(md5("people" . "edcfa9d051ec11ecbf630242ac130002")) ?></td>
    </tr>
</table>