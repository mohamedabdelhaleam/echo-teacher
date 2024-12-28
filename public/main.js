


console.log("ZZZZZ");

// Start Home
const airportContainer = document.querySelector("#airport");
const airportInp = document.querySelector("#airport input");
const locationContainer = document.querySelector("#location");
const locationInp = document.querySelector("#location input");
let toggling = false;

const swap = () => {
    if (toggling === false) {
        airportInp.placeholder = "Departure airport";
        locationInp.placeholder = "Pick-up location";
        toggling = true;
    } else {
        airportInp.placeholder = "Arrival airport";
        locationInp.placeholder = "Going to";
        toggling = false;
    }
};

const add_return_tabs = document.querySelectorAll(
    "#add_return_tabs #add_return_tab"
);
const showRetrunTabsBtn = document.querySelector("#showRetrunTabsBtn");
const hideRetrunTabsBtn = document.querySelector("#hideRetrunTabsBtn");

function showRetrunTabs() {
    console.log("showRetrunTabs");
    add_return_tabs.forEach((tab) => {
        showRetrunTabsBtn.classList.add("hidden");
        tab.classList.remove("hidden");
        tab.classList.add("flex");
        hideRetrunTabsBtn.classList.remove("hidden");
        hideRetrunTabsBtn.classList.add("inline");
    });
}

const hideRetrunTabs = () => {
    add_return_tabs.forEach((tab) => {
        showRetrunTabsBtn.classList.remove("hidden");
        tab.classList.add("hidden");
        tab.classList.remove("flex");
        hideRetrunTabsBtn.classList.add("hidden");
        hideRetrunTabsBtn.classList.remove("inline");
    });
};

const isSearch = (id) => {
    const elemnt = document.querySelector(`#${id}`);
    elemnt.classList.remove("opacity-0", "invisible");
};

const isBlur = (id) => {
    const elemnt = document.querySelector(`#${id}`);
    elemnt.classList.add("opacity-0", "invisible");
};
// End Home

// Start About



const keenSliderPrevious = document.getElementById("keen-slider-previous");
const keenSliderNext = document.getElementById("keen-slider-next");

const keenSliderPreviousDesktop = document.getElementById(
    "keen-slider-previous-desktop"
);
const keenSliderNextDesktop = document.getElementById(
    "keen-slider-next-desktop"
);

keenSliderPrevious.addEventListener("click", () => keenSlider.prev());
keenSliderNext.addEventListener("click", () => keenSlider.next());

keenSliderPreviousDesktop.addEventListener("click", () => keenSlider.prev());
keenSliderNextDesktop.addEventListener("click", () => keenSlider.next());
// End About

// Start CheckSearch
const steps = document.querySelectorAll(".step");
const tabContents = document.querySelectorAll(".tab-content");
let currentStep = 0;

function updateSteps() {
    steps.forEach((step, index) => {
        const stepNumber = step.querySelector("span");
        if (index === currentStep) {
            stepNumber.classList.add("bg-blue-600", "text-white");
            stepNumber.classList.remove("bg-white", "text-gray-400");
        } else {
            stepNumber.classList.remove("bg-blue-600", "text-white");
            stepNumber.classList.add("bg-white", "text-gray-400");
        }
    });

    tabContents.forEach((content, index) => {
        if (
            index === currentStep ||
            (currentStep === steps.length && index === steps.length)
        ) {
            content.classList.remove("hidden");
            content.classList.add("block");
        } else {
            content.classList.add("hidden");
        }
    });

    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    if (currentStep === steps.length) {
        prevBtn.classList.add("hidden");
        nextBtn.classList.add("hidden");

        setTimeout(() => {
            location.reload();
        }, 4000);
    } else {
        prevBtn.classList.toggle("opacity-0", currentStep === 0);
        nextBtn.classList.toggle("hidden", currentStep === steps.length);
        nextBtn.textContent =
            currentStep === steps.length - 1 ? "Finish" : "Next";
    }
}

function nextStep() {
    if (currentStep < steps.length - 1) {
        currentStep++;
        updateSteps();
    } else if (currentStep === steps.length - 1) {
        currentStep = steps.length; // Move to congratulatory step
        updateSteps();
    }
}

function prevStep() {
    if (currentStep > 0) {
        currentStep--;
        updateSteps();
    }
}

updateSteps();

const handleTabChange = () => {
    const element = document.querySelector(".tabs");
    if (element) {
        const elementPosition =
            element.getBoundingClientRect().top + window.scrollY;
        const offsetPosition = elementPosition - 175;

        window.scrollTo({
            top: offsetPosition,
            // behavior: 'smooth' // Uncomment for smooth scrolling
        });
    }
};
// End CheckSearch

// Start CheckTransfer
let adultCount = 0;
let childCount = 0;

const adultCountElement = document.getElementById("adultCount");
const childCountElement = document.getElementById("childCount");

const adultIncrementButton = document.getElementById("adultIncrement");
const adultDecrementButton = document.getElementById("adultDecrement");
const childIncrementButton = document.getElementById("childIncrement");
const childDecrementButton = document.getElementById("childDecrement");

const updateAdultCount = () => {
    adultCountElement.textContent = adultCount;
};

const updateChildCount = () => {
    childCountElement.textContent = childCount;
};

adultIncrementButton.addEventListener("click", () => {
    adultCount++;
    updateAdultCount();
});

adultDecrementButton.addEventListener("click", () => {
    if (adultCount > 0) {
        adultCount--;
        updateAdultCount();
    }
});

childIncrementButton.addEventListener("click", () => {
    childCount++;
    updateChildCount();
});

childDecrementButton.addEventListener("click", () => {
    if (childCount > 0) {
        childCount--;
        updateChildCount();
    }
});

const calendarBody = document.getElementById("calendarBody");
const currentMonthSpan = document.getElementById("currentMonth");
const prevMonthBtn = document.getElementById("prevMonthBtn");
const nextMonthBtn = document.getElementById("nextMonthBtn");

let currentDate = new Date();
let selectedDay = null;

function updateCalendar() {
    calendarBody.innerHTML = "";

    const firstDayOfMonth = new Date(
        currentDate.getFullYear(),
        currentDate.getMonth(),
        1
    );
    const lastDayOfMonth = new Date(
        currentDate.getFullYear(),
        currentDate.getMonth() + 1,
        0
    );

    currentMonthSpan.textContent = currentDate.toLocaleString("default", {
        month: "long",
        year: "numeric",
    });

    const startDay = firstDayOfMonth.getDay();
    const totalDays = lastDayOfMonth.getDate();

    let calendarHtml = "<tr>";
    for (let i = 0; i < startDay; i++) {
        calendarHtml += '<td class="pt-6"></td>';
    }

    for (let day = 1; day <= totalDays; day++) {
        if ((startDay + day - 1) % 7 === 0) {
            calendarHtml += "</tr><tr>";
        }
        calendarHtml += `
        <td class="pt-6">
            <div class="flex justify-center ${
                selectedDay === day ? "bg-primary text-white rounded-full" : ""
            } w-full p-1 cursor-pointer size-max day" data-day="${day}">
                <p class="text-base font-medium text-gray-500 dark:text-gray-100">
                    ${day}
                </p>
            </div>
        </td>`;
    }

    calendarHtml += "</tr>";
    calendarBody.innerHTML = calendarHtml;

    document.querySelectorAll(".day").forEach((element) => {
        element.addEventListener("click", (event) => {
            const day = parseInt(event.currentTarget.getAttribute("data-day"));
            selectedDay = day;
            updateCalendar();
        });
    });
}

prevMonthBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
});

nextMonthBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    updateCalendar();
});

updateCalendar();
// End CheckTransfer

// Start Animate

gsap.registerPlugin(ScrollTrigger);

// Example GSAP animation
gsap.to(".box", {
    scrollTrigger: ".box",
    x: 500,
    duration: 2,
});
// End Animate

// Start Smooth Scrolling

const lenis = new Lenis();

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// Sync Lenis with ScrollTrigger
ScrollTrigger.addEventListener("refresh", () => lenis.update());
ScrollTrigger.refresh();
// End Smooth Scrolling
