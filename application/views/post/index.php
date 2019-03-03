<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD MULTI DATABASE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <h1 style="text-align:center">Database 1</h1>
        <a class="btn btn-primary" type="button" href="<?= base_url('post/create'); ?>">Create</a>
        <table class="table table-bordered">
            <thead>
                <tr style="text-align:center">
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data_db1 as $row) : ?>
                <tr style="text-align:center">
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $row->title; ?>
                    </td>
                    <td>
                        <?= $row->content; ?>
                    </td>
                    <td><a href="<?= base_url('post/update/'.$row->id); ?>">Update</a> / <a href="<?= base_url('post/delete/'.$row->id); ?>">Delete</a></td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

        <br>
        <h1 style="text-align:center">Database 1</h1>
        <table class="table table-bordered">
            <thead>
                <tr style="text-align:center">
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data_db2 as $row) : ?>
                <tr style="text-align:center">
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $row->title; ?>
                    </td>
                    <td>
                        <?= $row->category; ?>
                    </td>
                    <td><a href="<?= base_url('post_2/update/'.$row->id); ?>">Update</a> / <a href="<?= base_url('post/delete/'.$row->id); ?>">Delete</a></td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 