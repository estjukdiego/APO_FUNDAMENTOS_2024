<?php
$title = "Currículo Fast";
?>

<<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Currículo Fast</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script defer src="script.js"></script>
    <style>
        .breadcrumb-item.active {
            font-size: 25px;
            font-weight: bold;
            color: #2c3e50;
            text-align: center;
            width: 100%;
        }
        /* Estilo para campos de entrada */
        .form-control {
            margin-bottom: 10px;
        }
        /* Estilo para botões */
        .add-button {
            margin-top: 10px;
        }
    </style>
    <script>
        function calculateAge() {
            var dob = document.getElementById('dob').value;
            var dobDate = new Date(dob);
            var diff = Date.now() - dobDate.getTime();
            var ageDate = new Date(diff);
            var age = Math.abs(ageDate.getUTCFullYear() - 1970);
            document.getElementById('age').value = age;
        }
    </script>
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item active" aria-current="page">CURRÍCULO FAST</li>
        </ol>
    </nav>

    <div class="container mt-4">
        <div class="section">
            <h2>Informações Pessoais</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dob" name="dob" oninput="calculateAge()">
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Idade</label>
                    <input type="text" class="form-control" id="age" name="age" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="sex">Sexo</label>
                    <input type="text" class="form-control" id="sex" name="sex">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Telefone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group col-md-12">
                    <label for="address">Endereço</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group col-md-12">
                    <label for="photo">Foto</label>
                    <input type="file" class="form-control-file" id="photo">
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Formação</h2>
            <div id="education-section">
                <div class="form-group">
                    <label for="education-1">Instituição e Curso</label>
                    <input type="text" class="form-control" id="education-1" name="education[]">
                </div>
            </div>
            <button class="btn btn-primary add-button" onclick="addEducation()">Adicionar Formação</button>
        </div>

        <div class="section">
            <h2>Experiências Profissionais</h2>
            <div id="experience-section">
                <div class="form-group">
                    <label for="experience-1">Empresa e Cargo</label>
                    <input type="text" class="form-control" id="experience-1" name="experience[]">
                    <label for="experience-desc-1">Descrição das Atividades</label>
                    <textarea class="form-control" id="experience-desc-1" name="experience-desc[]"></textarea>
                </div>
            </div>
            <button class="btn btn-primary add-button" onclick="addExperience()">Adicionar Experiência</button>
        </div>

        <button class="btn btn-success mt-3" onclick="generatePDF()">Gerar PDF</button>
    </div>
</body>
</html>
