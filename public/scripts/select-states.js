const ENTER_CLASS = "enter"

class StatesHandler {
    handle() {
        this.handleClick()
    }

    handleClick() {
        const btn = document.querySelector(".select-state")
        const statesList = document.querySelector(".states-wrapper")

        btn.addEventListener("click", (e) => {
            e.stopPropagation()
            statesList.classList.toggle(ENTER_CLASS)
        })

        statesList.addEventListener("click", (e) => {
            e.stopPropagation()
        })

        document.addEventListener("click", () => {
            statesList.classList.remove(ENTER_CLASS)
        })
        
        btn.addEventListener("mouseover", () => {
            console.log("bom dia")
            statesList.classList.add(ENTER_CLASS)
        })

        btn.addEventListener("mouseleave", () => {
            statesList.classList.remove(ENTER_CLASS)
        })
    }
}

new StatesHandler().handle()
