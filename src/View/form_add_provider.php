<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Adicionar um novo fornecedor</title>
</head>
<body>

    <form action="../controller/Provider.php" method="POST">
        <section class="mx-4 mt-4 columns-3">
                <article>
                    <label for="cnpj" class="cursor-pointer">CNPJ: </label>
                    <input type="number" name="cnpj" id="cnpj" class="border border-blue-400" required>
                </article>
                <article>
                    <label for="name" class="cursor-pointer">Nome: </label>
                    <input type="text" name="name" id="name" class="border border-blue-400" required>
                </article>
                <article>
                    <label for="phoneNumber" class="cursor-pointer">Telefone: </label>
                    <input type="number" name="phoneNumber" id="phoneNumber" class="border border-blue-400" required>
                </article>
        </section>
        <section class="mx-4 mt-4 columns-3">
                <article>
                    <label for="publicPlace" class="cursor-pointer">Logradouro: </label>
                    <input type="text" name="publicPlace" id="publicPlace" class="border border-blue-400" required>
                </article>
                <article>
                    <label for="streetNumber" class="cursor-pointer">Numero da residencia: </label>
                    <input type="number" name="streetNumber" id="streetNumber" class="border border-blue-400" required>
                </article>
                <article>
                    <label for="neighborhood" class="cursor-pointer">Bairro: </label>
                    <input type="text" name="neighborhood" id="neighborhood" class="border border-blue-400" required>
                </article>
        </section>
        <section class="mx-4 mt-4 columns-3">
                <article>
                    <label for="city" class="cursor-pointer">Cidade: </label>
                    <input type="text" name="city" id="city" class="border border-blue-400" required>
                </article>
                <article>
                    <label for="postalCode" class="cursor-pointer">CEP: </label>
                    <input type="number" name="postalCode" id="postalCode" class="border border-blue-400" required>
                </article>
        </section>
        <article class="flex justify-center mt-3">
            <button type="submit" class="p-3 text-white bg-blue-700 rounded">Cadastrar</button>
        </article>
    </form>
</body>
</html>