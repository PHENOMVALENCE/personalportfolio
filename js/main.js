;(() => {
  // Preloader
  window.addEventListener("load", () => {
    const preloader = document.getElementById("preloader")
    preloader.style.display = "none"

    // Initialize skill bars animation
    initSkillBars()
  })

  // Sticky Header
  window.addEventListener("scroll", () => {
    const header = document.getElementById("header")
    if (window.scrollY > 50) {
      header.classList.add("sticky")
    } else {
      header.classList.remove("sticky")
    }

    // Back to top button
    const backToTop = document.querySelector(".back-to-top")
    if (window.scrollY > 300) {
      backToTop.classList.add("active")
    } else {
      backToTop.classList.remove("active")
    }
  })

  // Mobile Menu Toggle
  const menuToggle = document.querySelector(".mobile-menu-toggle")
  const closeMenu = document.querySelector(".close-menu")
  const mobileMenu = document.querySelector(".mobile-menu")

  menuToggle.addEventListener("click", () => {
    mobileMenu.classList.add("active")
  })

  closeMenu.addEventListener("click", () => {
    mobileMenu.classList.remove("active")
  })

  // Close mobile menu when clicking on a link
  const mobileMenuLinks = document.querySelectorAll(".mobile-menu ul li a")
  mobileMenuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      mobileMenu.classList.remove("active")
    })
  })

  // Smooth scrolling for navigation links
  const navLinks = document.querySelectorAll(
    "header nav ul li a, .mobile-menu ul li a, .footer-nav ul li a, .hero-buttons a, .back-to-top",
  )

  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      if (this.getAttribute("href").startsWith("#")) {
        e.preventDefault()

        const targetId = this.getAttribute("href")
        if (targetId === "#") return

        const targetSection = document.querySelector(targetId)
        if (targetSection) {
          window.scrollTo({
            top: targetSection.offsetTop - 70,
            behavior: "smooth",
          })
        }
      }
    })
  })

  // Active navigation link based on scroll position
  window.addEventListener("scroll", () => {
    const sections = document.querySelectorAll("section")
    const navLinks = document.querySelectorAll("header nav ul li a, .mobile-menu ul li a")

    let current = ""

    sections.forEach((section) => {
      const sectionTop = section.offsetTop
      const sectionHeight = section.clientHeight

      if (window.scrollY >= sectionTop - 100) {
        current = section.getAttribute("id")
      }
    })

    navLinks.forEach((link) => {
      link.classList.remove("active")
      if (link.getAttribute("href") === `#${current}`) {
        link.classList.add("active")
      }
    })
  })

  // Initialize skill bars animation
  function initSkillBars() {
    const skillBars = document.querySelectorAll(".skill-progress")

    skillBars.forEach((bar) => {
      const progress = bar.getAttribute("data-progress")

      // Use Intersection Observer to animate when in viewport
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              bar.style.width = `${progress}%`
              observer.unobserve(entry.target)
            }
          })
        },
        { threshold: 0.5 },
      )

      observer.observe(bar)
    })
  }

  // Contact Form Submission
  const contactForm = document.getElementById("contactForm")
  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault()

      const formMessage = document.getElementById("form-message")
      const submitButton = contactForm.querySelector('button[type="submit"]')

      // Disable submit button during form submission
      submitButton.disabled = true
      submitButton.innerHTML = "Sending..."

      // Get form data
      const formData = new FormData(contactForm)

      // Send form data using fetch API
      fetch(contactForm.getAttribute("action"), {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            formMessage.innerHTML = `<div class="alert-success">${data.message}</div>`
            contactForm.reset()
          } else {
            formMessage.innerHTML = `<div class="alert-error">${data.message}</div>`
          }
        })
        .catch((error) => {
          formMessage.innerHTML = '<div class="alert-error">Oops! Something went wrong. Please try again later.</div>'
          console.error("Error:", error)
        })
        .finally(() => {
          // Re-enable submit button
          submitButton.disabled = false
          submitButton.innerHTML = "Send Message"

          // Clear form message after 5 seconds
          setTimeout(() => {
            formMessage.innerHTML = ""
          }, 5000)
        })
    })
  }
})()
