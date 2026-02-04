const ENTER_CLASS = "enter"

class StatesHandler {
    handle() {
        window.addEventListener("load", () => {
            this.handleClick()
        })
    }

    handleClick() {
        const fullDiv =  document.querySelector(".select-state")
        const btn = document.querySelector(".select-state button")
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

        btn.addEventListener("focus", () => {
            statesList.classList.add(ENTER_CLASS)
        })

        btn.addEventListener("focus", () => {
            statesList.classList.remove(ENTER_CLASS)
        })
        
        statesList.addEventListener("focusin", () => {
            statesList.classList.add(ENTER_CLASS)
        })

        statesList.addEventListener("focusout", () => {
            statesList.classList.remove(ENTER_CLASS)
        }) 
        
        fullDiv.addEventListener("mouseover", () => {
            statesList.classList.add(ENTER_CLASS)
        })

        fullDiv.addEventListener("mouseleave", () => {
            statesList.classList.remove(ENTER_CLASS)
        })
    }
}

new StatesHandler().handle()
