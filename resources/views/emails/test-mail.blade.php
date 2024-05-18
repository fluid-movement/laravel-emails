<x-mail::message>
# Hi there {{ $name }}

<x-mail::panel>
This is a message for you
</x-mail::panel>

<x-mail::button :url="'http://example.test/'" color="success">
Go to site
</x-mail::button>
</x-mail::message>
