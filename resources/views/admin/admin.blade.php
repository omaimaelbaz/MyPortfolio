<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#information">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formation">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="information" class="container mt-5">
        <h2 class="mb-4">Information Table</h2>
        <a href="#" class="btn btn-primary mb-3">Add Info</a>

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
                <tbody id="information-table-body"></tbody>
            </table>
        </div>
    </div>

    <div id="formation" class="container mt-5">
        <h2 class="mb-4">Formation Table</h2>
        <a href="/addformation" class="btn btn-primary mb-3">Add Formation</a>

        <div class="table-responsive-md">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Diplome</th>
                        <th scope="col">Etablissement</th>
                        <th scope="col">Lieu</th>
                        <th scope="col">Annee Obtention</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="formation-table-body"></tbody>
            </table>
        </div>
    </div>

    <div id="experience" class="container mt-5">
        <h2 class="mb-4">Experience Table</h2>
        <button type="button" class="btn btn-primary mb-3">Add Experience</button>

        <div class="table-responsive-md">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Poste</th>
                        <th scope="col">Entreprise</th>
                        <th scope="col">Lieu</th>
                        <th scope="col">Date Debut</th>
                        <th scope="col">Date Fin</th>
                        <th scope="col">Responsabilites</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="experience-table-body"></tbody>
            </table>
        </div>
    </div>

    <script>
        fetch('/api/info')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('information-table-body');
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

        fetch('/api/formation')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('formation-table-body');
                data.forEach(formation => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${formation.diplome}</td>
                        <td>${formation.etablissement}</td>
                        <td>${formation.lieu}</td>
                        <td>${formation.annee_obtention}</td>
                        <td>
                            <a href="#" class="btn btn-secondary">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching data:', error));

        fetch('/api/experience')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('experience-table-body');
                data.forEach(experience => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${experience.poste}</td>
                        <td>${experience.entreprise}</td>
                        <td>${experience.lieu}</td>
                        <td>${experience.date_debut}</td>
                        <td>${experience.date_fin}</td>
                        <td>${experience.responsabilites}</td>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/poppe
