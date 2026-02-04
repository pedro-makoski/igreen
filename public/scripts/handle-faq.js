class FaqHandler {
  constructor() {}

  handle() {
    const faqItems = document.querySelectorAll(".faq article");
    this.putAllFaqItensClosedAndHandle(faqItems);
  }

  putAllFaqItensClosedAndHandle(itens) {
    itens.forEach((item) => {
      this.close(item);
      this.handleOpen(item);
    });
  }

  handleOpen(item) {
    const openFn = () => {
      if (item.classList.contains(ENTER_CLASS)) {
        this.close(item);
        return;
      }

      this.open(item);
    };

    const question = item.querySelector(".question")
    question.addEventListener("click", openFn);
}

  close(item) {
    item.classList.remove(ENTER_CLASS);
    const question = item.querySelector(".question");
    const heightQuestion = question.getBoundingClientRect().height;

    item.style.height = `${heightQuestion}px`;
  }

  closeAll() {
    document
      .querySelectorAll(".faq article")
      .forEach((itemToClose) => this.close(itemToClose));
  }

  open(item) {
    this.closeAll();
    item.classList.add(ENTER_CLASS);
    const question = item.querySelector(".question");
    const response = item.querySelector(".response");
    const heightFull =
      question.getBoundingClientRect().height +
      response.getBoundingClientRect().height;

    item.style.height = `${heightFull}px`;
  }
}

new FaqHandler().handle();
