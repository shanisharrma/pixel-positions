<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Windter Park, Plorida" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acne.con/jobs/ceo-wanted" />
        <x-forms.checkbox label="feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" palceholder="Laracasts, video, education" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
