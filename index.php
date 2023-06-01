<?php require('./codigo_reutilizado/header.php') ?>

    <main>
        <section id="hero">
            <h1>Bienvenido</h1>
            <p>Vendemos perfumes exclusivos a precios accesibles.</p>
        </section>

        <container id="productos">
            <div>
                <h2>hola</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque blanditiis, tempora dolor sit, delectus facilis aut voluptates asperiores rerum, quidem dolorem voluptate. Labore facere aliquam eos consequuntur laudantium possimus.</p>
            </div>
            <div>
                <h2>hola</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque blanditiis, tempora dolor sit, delectus facilis aut voluptates asperiores rerum, quidem dolorem voluptate. Labore facere aliquam eos consequuntur laudantium possimus.</p>
            </div>
            <div>
                <h2>hola</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque blanditiis, tempora dolor sit, delectus facilis aut voluptates asperiores rerum, quidem dolorem voluptate. Labore facere aliquam eos consequuntur laudantium possimus.</p>
            </div>
            <div>
                <h2>hola</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque blanditiis, tempora dolor sit, delectus facilis aut voluptates asperiores rerum, quidem dolorem voluptate. Labore facere aliquam eos consequuntur laudantium possimus.</p>
            </div>
            <div>
                <h2>hola</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque blanditiis, tempora dolor sit, delectus facilis aut voluptates asperiores rerum, quidem dolorem voluptate. Labore facere aliquam eos consequuntur laudantium possimus.</p>
            </div>
            <div>
                <h2>hola</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque blanditiis, tempora dolor sit, delectus facilis aut voluptates asperiores rerum, quidem dolorem voluptate. Labore facere aliquam eos consequuntur laudantium possimus.</p>
            </div>
        </container>
    </main>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')
        toggleBtn.onclick =function (){
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ?'fa-solid fa-xmark'
            :'fa-solid fa-bars'
        }
</script>
<?php require('./codigo_reutilizado/fin.php') ?>