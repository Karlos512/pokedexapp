document.querySelector('#buscar').addEventListener('click', function(){
    getNewPokemon();
});

control = setInterval(() => {
    getNewPokemon();
}, 30000);

function getNewPokemon(){
    let foto_pokemon=document.getElementById('foto')
    let name=document.getElementById('name')
    let info=document.getElementById('info')

        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: '/savePokemon',
            method:'GET',
            dataType: "json", 
            success:function(data)
            {
                 foto_pokemon.setAttribute("src",data.sprites.front_default)
                name.textContent=data.name.toUpperCase();
                info.textContent='Algunos de los movimientos de '+data.name+' son '+data.moves[1].move.name+' y '+data.moves[2].move.name
            }
        });
}