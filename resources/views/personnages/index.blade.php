<x-app-layout>
    <h2 class="titlecharacters">
        Nos {{ ucfirst($category->name) }}s :
    </h2>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md bg-gray-800">
                    <img class="rounded" src="{{asset('storage/img/detoured_img/Paladin.png')}}" alt="Default avatar">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        <p class="mb-3 font-normal text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
            </div>
            <div class="flip-card-back">

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    let cards = document.querySelectorAll(".flip-card")
    let images = document.querySelectorAll(".flip-card img")
    let click = false

    for (let card of cards) {
        // let a = card.querySelector(".no-flip")
        // a.addEventListener("click", () => {
        //     click = true
        // })
        if (!click) {
            card.addEventListener("click", () => {
                card.querySelector(".flip-card-inner").classList.toggle("flipTrue")
            })
        }
    }
</script>
