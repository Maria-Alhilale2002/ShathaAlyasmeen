/**
 * SHATHA AL-YASMIN - Vanilla JS UI Utilities
 * Version: 1.0.0
 * Unified JavaScript for all pages
 */

/* ============================================
   1. TOAST NOTIFICATION SYSTEM
   ============================================ */
class ToastManager {
  constructor() {
    this.container = null;
    this.init();
  }

  init() {
    let container = document.getElementById('toast-container');
    
    if (!container) {
      container = document.createElement('div');
      container.id = 'toast-container';
      container.style.cssText = `
        position: fixed;
        top: 20px;
        left: 20px;
        z-index: 1100;
      `;
      document.body.appendChild(container);
    }
    
    this.container = container;
  }

  success(message) {
    this.show(message, '#27ae60');
  }

  error(message) {
    this.show(message, '#e74c3c');
  }

  info(message) {
    this.show(message, '#3498db');
  }

  warning(message) {
    this.show(message, '#f39c12');
  }

  show(message, bg) {
    const toast = document.createElement('div');
    toast.style.cssText = `
      background: ${bg};
      color: #fff;
      padding: 12px 24px;
      margin-bottom: 10px;
      border-radius: 8px;
      font-family: 'Cairo', sans-serif;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      animation: slideInRight 0.3s ease;
    `;
    toast.textContent = message;
    this.container.appendChild(toast);
    
    setTimeout(() => {
      if (toast.parentNode) {
        toast.style.opacity = '0';
        toast.style.transition = 'opacity 0.3s ease';
        setTimeout(() => toast.remove(), 300);
      }
    }, 3500);
  }
}

const toast = new ToastManager();

/* ============================================
   2. FORM VALIDATION HELPER
   ============================================ */
class FormValidator {
  constructor(formElement) {
    this.form = formElement;
    this.fields = new Map();
    
    if (this.form) {
      this.setupValidation();
    }
  }

  setupValidation() {
    const inputs = this.form.querySelectorAll('input, textarea, select');
    
    inputs.forEach(input => {
      input.addEventListener('blur', () => {
        this.validateField(input);
      });
      
      input.addEventListener('focus', () => {
        this.clearError(input);
      });
      
      this.fields.set(input, {
        isValid: true,
        errorMessage: ''
      });
    });
  }

  validateField(input) {
    let isValid = true;
    let errorMessage = '';

    if (input.hasAttribute('required') && !input.value.trim()) {
      isValid = false;
      errorMessage = 'هذا الحقل مطلوب';
      input.style.borderColor = '#e74c3c';
    } 
    else if (input.type === 'email' && input.value.trim()) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(input.value.trim())) {
        isValid = false;
        errorMessage = 'البريد الإلكتروني غير صحيح';
        input.style.borderColor = '#e74c3c';
      } else {
        input.style.borderColor = '#27ae60';
      }
    }
    else if (input.type === 'tel' && input.value.trim()) {
      const phoneRegex = /^(05|5)[0-9]{8}$/;
      if (!phoneRegex.test(input.value.trim())) {
        isValid = false;
        errorMessage = 'رقم الجوال غير صحيح (مثال: 05XXXXXXXX)';
        input.style.borderColor = '#e74c3c';
      } else {
        input.style.borderColor = '#27ae60';
      }
    }
    else if (input.hasAttribute('minlength') && input.value.trim()) {
      const minLength = parseInt(input.getAttribute('minlength'));
      if (input.value.trim().length < minLength) {
        isValid = false;
        errorMessage = `الحد الأدنى ${minLength} أحرف`;
        input.style.borderColor = '#e74c3c';
      } else {
        input.style.borderColor = '#27ae60';
      }
    }
    else if (input.value.trim()) {
      input.style.borderColor = '#27ae60';
    } else {
      input.style.borderColor = '#e8e8e8';
    }

    this.fields.set(input, {
      isValid: isValid,
      errorMessage: errorMessage
    });

    const errorElement = this.getErrorElement(input);
    if (errorElement) {
      if (!isValid) {
        errorElement.textContent = errorMessage;
        errorElement.style.display = 'block';
      } else {
        errorElement.style.display = 'none';
      }
    }

    return isValid;
  }

  clearError(input) {
    input.style.borderColor = '#e8e8e8';
    const errorElement = this.getErrorElement(input);
    if (errorElement) {
      errorElement.style.display = 'none';
    }
  }

  getErrorElement(input) {
    const formGroup = input.closest('.form-group');
    if (!formGroup) return null;
    
    let errorElement = formGroup.querySelector('.error-message');
    if (!errorElement) {
      errorElement = document.createElement('div');
      errorElement.className = 'error-message';
      errorElement.style.cssText = `
        color: #e74c3c;
        font-size: 0.85rem;
        margin-top: 4px;
        display: none;
      `;
      formGroup.appendChild(errorElement);
    }
    return errorElement;
  }

  validate() {
    if (!this.form) return false;
    
    let isValid = true;
    const inputs = this.form.querySelectorAll('input[required], textarea[required], select[required]');
    
    inputs.forEach(input => {
      if (!this.validateField(input)) {
        isValid = false;
      }
    });
    
    return isValid;
  }

  reset() {
    const inputs = this.form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
      input.style.borderColor = '#e8e8e8';
      const errorElement = this.getErrorElement(input);
      if (errorElement) {
        errorElement.style.display = 'none';
      }
      this.fields.set(input, {
        isValid: true,
        errorMessage: ''
      });
    });
  }
}

/* ============================================
   3. BUTTON STATE UTILITIES
   ============================================ */
const ButtonState = {
  setLoading(button, isLoading, loadingText = 'جارٍ الإرسال...') {
    if (!button) return;
    
    if (isLoading) {
      button.disabled = true;
      button.dataset.originalText = button.innerHTML;
      button.innerHTML = `
        <i class='bi bi-arrow-repeat bi-spin'></i> 
        ${loadingText}
      `;
    } else {
      button.disabled = false;
      button.innerHTML = button.dataset.originalText || button.innerHTML;
      delete button.dataset.originalText;
    }
  },

  setSuccess(button, successText = '✓ تم الإرسال') {
    if (!button) return;
    
    button.disabled = true;
    button.innerHTML = successText;
    button.style.backgroundColor = '#27ae60';
    
    setTimeout(() => {
      button.innerHTML = button.dataset.originalText || button.innerHTML;
      button.style.backgroundColor = '';
      button.disabled = false;
    }, 3000);
  },

  reset(button) {
    if (!button) return;
    
    button.disabled = false;
    if (button.dataset.originalText) {
      button.innerHTML = button.dataset.originalText;
      delete button.dataset.originalText;
    }
    button.style.backgroundColor = '';
  }
};

/* ============================================
   4. MOBILE MENU CONTROLLER
   ============================================ */
class MobileMenu {
  constructor(options = {}) {
    this.menuToggle = document.getElementById(options.toggleId || 'menuToggle');
    this.mobileMenu = document.getElementById(options.menuId || 'mobileMenu');
    this.menuOverlay = document.getElementById(options.overlayId || 'menuOverlay');
    this.closeButton = document.getElementById(options.closeId || 'closeMenu');
    this.body = document.body;
    this.isOpen = false;
    
    this.init();
  }

  init() {
    if (!this.menuToggle || !this.mobileMenu) return;

    this.menuToggle.addEventListener('click', () => this.open());
    
    if (this.closeButton) {
      this.closeButton.addEventListener('click', () => this.close());
    }
    
    if (this.menuOverlay) {
      this.menuOverlay.addEventListener('click', () => this.close());
    }
    
    const links = this.mobileMenu.querySelectorAll('a');
    links.forEach(link => {
      link.addEventListener('click', () => this.close());
    });
    
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.isOpen) {
        this.close();
      }
    });
    
    window.addEventListener('resize', () => {
      if (window.innerWidth > 768 && this.isOpen) {
        this.close();
      }
    });
  }

  open() {
    this.mobileMenu.classList.add('active');
    if (this.menuOverlay) this.menuOverlay.classList.add('active');
    this.body.classList.add('menu-open');
    this.isOpen = true;
  }

  close() {
    this.mobileMenu.classList.remove('active');
    if (this.menuOverlay) this.menuOverlay.classList.remove('active');
    this.body.classList.remove('menu-open');
    this.isOpen = false;
  }

  toggle() {
    this.isOpen ? this.close() : this.open();
  }
}

/* ============================================
   5. HERO VIDEO CONTROLLER
   ============================================ */
class HeroVideo {
  constructor(videoSelector = '.hero-background-video') {
    this.video = document.querySelector(videoSelector);
    this.init();
  }

  init() {
    if (!this.video) return;
    
    this.video.play().catch(() => {
      console.log('Video autoplay prevented');
    });

    document.addEventListener('visibilitychange', () => {
      if (document.hidden) {
        this.video.pause();
      } else {
        this.video.play().catch(() => {});
      }
    });
  }
}

/* ============================================
   6. LAZY LOADING
   ============================================ */
class LazyLoader {
  constructor() {
    this.observer = null;
    this.init();
  }

  init() {
    if ('IntersectionObserver' in window) {
      this.observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const element = entry.target;
            
            if (element.dataset.src) {
              element.src = element.dataset.src;
              element.removeAttribute('data-src');
            }
            
            if (element.dataset.bg) {
              element.style.backgroundImage = `url(${element.dataset.bg})`;
              element.removeAttribute('data-bg');
            }
            
            this.observer.unobserve(element);
          }
        });
      }, {
        rootMargin: '50px 0px',
        threshold: 0.01
      });
      
      this.observeElements();
    }
  }

  observeElements() {
    document.querySelectorAll('[data-src], [data-bg]').forEach(el => {
      this.observer.observe(el);
    });
  }

  refresh() {
    if (this.observer) {
      this.observeElements();
    }
  }
}

/* ============================================
   7. MOBILE MENU - DIRECT IMPLEMENTATION
   (نسخة مباشرة لصفحة الخدمات)
   ============================================ */
document.addEventListener('DOMContentLoaded', function() {
  // تشغيل قائمة المنيو
  const menuToggle = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuOverlay = document.getElementById('menuOverlay');
  const closeMenu = document.getElementById('closeMenu');
  const body = document.body;

  function openMenu() {
    mobileMenu.classList.add('active');
    menuOverlay.classList.add('active');
    body.classList.add('menu-open');
  }

  function closeMenuFunc() {
    mobileMenu.classList.remove('active');
    menuOverlay.classList.remove('active');
    body.classList.remove('menu-open');
  }

  if (menuToggle) {
    menuToggle.addEventListener('click', openMenu);
  }

  if (closeMenu) {
    closeMenu.addEventListener('click', closeMenuFunc);
  }

  if (menuOverlay) {
    menuOverlay.addEventListener('click', closeMenuFunc);
  }

  // إغلاق القائمة عند الضغط على رابط
  const mobileLinks = document.querySelectorAll('.mobile-nav-links a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', closeMenuFunc);
  });

  // إغلاق القائمة عند تغيير حجم الشاشة لأكبر من 768px
  window.addEventListener('resize', function () {
    if (window.innerWidth > 768) {
      closeMenuFunc();
    }
  });

  // ============================================
  // 8. PAGE INITIALIZATION - باقي التهيئة
  // ============================================
  
  // Initialize mobile menu (class version - for other pages)
  const mobileMenuClass = new MobileMenu();
  
  // Initialize hero video (only on homepage)
  if (document.querySelector('.hero-background-video')) {
    const heroVideo = new HeroVideo();
  }
  
  // Initialize lazy loader
  const lazyLoader = new LazyLoader();
  
  // Initialize form validators
  const forms = document.querySelectorAll('form');
  const formValidators = [];
  forms.forEach(form => {
    const validator = new FormValidator(form);
    formValidators.push(validator);
    
    form.addEventListener('submit', function(e) {
      if (!validator.validate()) {
        e.preventDefault();
        toast.error('يرجى تعبئة جميع الحقول المطلوبة بشكل صحيح');
        return false;
      }
      
      if (!form.hasAttribute('action')) {
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');
        ButtonState.setLoading(submitBtn);
        
        setTimeout(() => {
          ButtonState.setSuccess(submitBtn);
          toast.success('تم إرسال الطلب بنجاح!');
          form.reset();
          validator.reset();
          setTimeout(() => ButtonState.reset(submitBtn), 3000);
        }, 2000);
      }
    });
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        targetElement.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Active link highlighting
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links a, .mobile-nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage) {
      link.classList.add('active');
    }
  });

  // Expose utilities globally
  window.SHATHA = {
    toast,
    ButtonState,
    FormValidator,
    MobileMenu,
    HeroVideo,
    LazyLoader
  };


    // ============================================
  // 9. CONTACT FORM HANDLING
  // ============================================
  
  // معالجة نموذج التواصل
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const form = this;
      const name = document.getElementById('name');
      const phone = document.getElementById('phone');
      const message = document.getElementById('message');

      // التحقق من الحقول المطلوبة
      if (!name.value.trim() || !phone.value.trim() || !message.value.trim()) {
        toast.error('يرجى ملء جميع الحقول المطلوبة بشكل صحيح');
        return;
      }

      // التحقق من رقم الجوال
      const phoneRegex = /^(05|5)[0-9]{8}$/;
      if (!phoneRegex.test(phone.value.trim())) {
        toast.error('رقم الجوال غير صحيح (مثال: 05XXXXXXXX)');
        phone.style.borderColor = '#e74c3c';
        return;
      }

      const submitBtn = form.querySelector('.submit-btn');
      const originalText = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = '<i class="bi bi-arrow-repeat bi-spin"></i> جارٍ الإرسال...';

      // محاكاة إرسال البيانات
      setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        toast.success('تم إرسال رسالتك بنجاح. سنتواصل معك قريباً');
        form.reset();
        
        // إعادة تعيين ألوان الحقول
        form.querySelectorAll('.form-control').forEach(input => {
          input.style.borderColor = '';
        });
      }, 1500);
    });

    // إزالة التحذير عند الكتابة في الحقول
    contactForm.querySelectorAll('.form-control').forEach(input => {
      input.addEventListener('input', function() {
        this.style.borderColor = '';
      });
    });
  }

  console.log('🌺 شذى الياسمين - الموقع جاهز');
  console.log('📦 Utilities:', window.SHATHA);
});