<div>
    <form wire:submit='save'> <!-- Here we define that save() function that we just created will be called when user will submit a form  -->
        <div class="form__field">
            <label>Title</label>
            <input type="text" wire:model='title' />
        </div>
        <div class="form__field">
            <label>Description</label>
            <textarea wire:model='description'></textarea>
        </div>
        <div class="form__field">
            <label>Price</label>
            <input type="number" wire:model='price' /> <!-- By using wire:model we choose which variable will changed by changing input -->
        </div>
        <input type="submit" value="Create product" />
    </form>
</div>
