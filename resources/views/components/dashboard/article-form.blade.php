<div>
    <h1>Create Article Post</h1>
    <form action="{{route('blogufy::dashboard.articles.store')}}" 
        method="POST" 
        enctype="multipart/form-data">
        @csrf

        @if (isset($editArticle) && $editArticle)
            @method('PUT')
            hello
        @endif
        <x-blogufy::forms.input 
            type="text"
            label="Article Title"
            id="postTitle"
            column="title"
            action="required" 
        />
        <x-blogufy::forms.select
            label="Category"
            id="category"
            column="category"
            action="required"
            :options="[]"
            optionKey=""
            optionName="" 
        />
        <x-blogufy::forms.select
            label="Status"
            id="status"
            column="status"
            action="required"
            :options="[]"
            optionKey=""
            optionName="" 
        />
        <x-blogufy::forms.input 
            type="text"
            label="Description"
            id="description"
            column="description"
            action="required" 
        />
        <x-blogufy::forms.input 
            type="file"
            label="Image"
            id="image"
            column="image"
            action="required" 
        />
        <x-blogufy::forms.textarea 
            type="text"
            label="Compose body"
            id="body"
            column="body"
            action="required" 
        />

        <x-blogufy::forms.button  id="submitBtn"/>
    </form>
</div>