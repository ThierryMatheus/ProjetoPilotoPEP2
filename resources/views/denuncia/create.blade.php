

<form action="" method="POST" class="mt-10">
    @csrf
    <div>
        <label for="title">Título:</label>
        <input type="text" id="title" name="titulo">
    </div>
    <div>
        <label for="date">Data:</label>
        <input type="date" id="date" name="data">
    </div>
    <div>
        <label for="time">Hora:</label>
        <input type="time" id="time">
    </div>
    <div>
        <label for="coment">Comentário:</label>
        <textarea type="text" id="coment">
            
        </textarea>
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
             