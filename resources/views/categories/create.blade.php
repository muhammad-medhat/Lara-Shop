<x-layout>
    <h3>create category</h3>
    <form action="/categories/create" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="description">
        <input type="submit" value="create">
    </form>
</x-layout>