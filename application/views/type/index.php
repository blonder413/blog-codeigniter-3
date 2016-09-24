<html>
<head>
        <title>Blonder413</title>
</head>
<body>
        <h1>Types!</h1>

        <table>
          <tr>
            <th>Type</th>
          </tr>
          <?php foreach ($model as $key => $value): ?>
          <tr>
            <td><?= $value->type ?></td>
          </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>
