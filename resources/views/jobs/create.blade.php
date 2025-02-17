<x-layout>
    <x-page-heading>Create Job</x-page-heading>

    <x-forms.form action="/jobs" method="POST">
        <x-forms.input name="title" label="Title" placeholder="Web Developer"/>
        <x-forms.input name="salary" label="Salary" placeholder="$90,000 USD"/>
        <x-forms.input name="location" label="Location" placeholder="Winter Park, Florida"/>
        <x-forms.divider/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option> 
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://acme.com/jobs/ceo-wanted"/>
        <x-forms.input name="tags" label="Tags (comma separated, OPTIONAL)" placeholder="Laracast, video, education"/>
        <x-forms.checkbox name="featured" label="Featured (costs extra)"/>

        <x-forms.divider/>

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>


</x-layout>
