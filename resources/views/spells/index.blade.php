<x-app-layout>
    @livewire('spells.index')
</x-app-layout>

<script>
    let cards = document.querySelectorAll(".flip-card")

    for (let card of cards) {
        card.querySelector('#flipRecto').addEventListener("click", () => {
            card.querySelector(".flip-card-inner").classList.toggle("flipTrue")
        })
        card.querySelector('#flipVerso').addEventListener("click", () => {
            card.querySelector(".flip-card-inner").classList.toggle("flipTrue")
        })
    }
</script>
