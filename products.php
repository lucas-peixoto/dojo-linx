<?php require 'partials/header.php'; ?>

<header class="header">
    <div class="container">
        <div class="title-wrapper">
            <h2 class="title">uma seleção de produtos</h2>
            <h2 class="title --big">especial para você</h2>

            <h4 class="subtitle">especial para você</h4>
        </div>

        <nav class="menu">
            <div class="menu-item">
                <a href="#" class="btn">Conheça a Linx</a>
            </div>
            <div class="menu-item">
                <a href="#" class="btn">Ajude o algorítimo</a>
            </div>
            <div class="menu-item">
                <a href="#" class="btn">Seus produtos</a>
            </div>
            <div class="menu-item">
                <a href="#" class="btn">Compartilhe</a>
            </div>
        </nav>
    </div>
</header>

<section class="form-register">
    <div class="info container">
        <h2 class="title">Ajude o algorítimo a ser mais certeiro</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies tellus nec mi porta convallis sollicitudin eu urna. Mauris rhoncus erat sed interdum dignissim. Suspendisse semper pretium consectetur. Praesent bibendum arcu risus, sit amet iaculis ex tempus quis. Cras et erat ut tellus vulputate tincidunt. Aenean lacinia euismod augue vel egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum vel urna tortor. Vivamus et arcu non felis tristique eleifend. Morbi eu condimentum urna. Curabitur eu magna eget turpis condimentum ultrices. Suspendisse quis lorem ultricies, pulvinar purus sed, egestas erat. Etiam ultricies a ante vehicula pharetra. Quisque ut neque mattis, consequat velit ut, ultrices orci. Nulla varius elementum erat vel pharetra.</p>
        <p>Aenean sit amet nisi diam. Morbi viverra, magna ac luctus commodo, odio ante suscipit libero, at mattis augue est vel metus.</p>
    </div>

    <div class="form container">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Nome:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="cpf">Nome:</label>
            <input type="text" id="cpf" name="cpf">
        </div>
        <div class="form-group">
            <label>
                <input type="radio" name="gender" value="m">
                Masculino
            </label>
            <label>
                <input type="radio" name="gender" value="f">
                Feminino
            </label>
        </div>
        <div>
            <a href="#" id="submit" class="btn">Enviar</a>
        </div>
    </div>
</section>

<?php require 'partials/footer.php'; ?>