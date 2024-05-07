<div>
    <div>
        <input wire:model = 'newComment' type="text">
        <button wire:click = 'addComment'>Add</button>
    </div>
    @foreach ($comments as $comment)
    <div>
        <h3>
            {{$comment['title']}}
        </h3>
        <p>
            {{$comment['body']}}
        </p>
    </div>
    <br>
    <br> 
        
    @endforeach
</div>
