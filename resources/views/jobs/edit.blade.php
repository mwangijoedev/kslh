
<x-layout>
    <x-page-heading>Edit Job</x-page-heading>

    <form action="/jobs/{{$job->id}}/edit" method="POST">
        @csrf
        @method('PATCH')

       <x-forms.input label="Title" name="title" value="{{$job->title}}"/>
       <x-forms.input label="Salary" name="salary" value="{{$job->salary}}"/>
       <x-forms.input name="location" label="Location" value="{{$job->location}}"/>
       <x-forms.input name="url" label="URL" value="{{$job->url}}"/>
        <x-forms.input name="tags" label="Tags (comma separated, OPTIONAL)" value="{{$job->tags->first()->name}}"/>

        <x-forms.select label="Schedule" name="schedule" value="{{$job->schedule}}">
            <option>Part Time</option> 
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.divider/>

        <x-forms.checkbox name="featured" label="Featured (costs extra)"/>

       <x-forms.divider/>

       <div class="flex justify-between">
      
        <form action="/jobs/{{$job->id}}/edit" id="edit_job">
            @csrf
            @method('DELETE')
            <x-forms.button type="submit" >Delete</x-forms.button>
        </form>
        <x-forms.button type="submit" >Update</x-forms.button>
       </div>
       
       
    </form>


</x-layout>
