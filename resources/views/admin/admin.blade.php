<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-section ftco-animate">
                <h1 class="big">Dashboard</h1>
                <h2 class="mb-4">Formation Table</h2>
                <button type="button" class="btn btn-primary mb-3">
                    add info
                </button>


                <div class="table-responsive-md">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Adresse</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="formation-table-body"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        fetch('/api/info')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('formation-table-body');
                data.forEach(info => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${info.nom}</td>
                        <td>${info.prenom}</td>
                        <td>${info.adresse}</td>
                        <td>${info.telephone}</td>
                        <td>${info.email}</td>
                        <td>
                            <a href="#" class="btn btn-secondary">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></scri

