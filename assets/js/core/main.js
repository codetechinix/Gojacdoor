/**
 * ========================================================
 * Krist E-Commerce – Main Application Logic
 * Validation, Capslock Detection, Form Handling
 * ========================================================
 */

/* ── Validation Utilities ─────────────────────────────── */
const V = {
    email: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v),
    phone: v => /^[\+]?[\d\s\-\(\)]{7,15}$/.test(v),
    notEmpty: v => v.trim().length > 0,
    minLen: (v, n) => v.length >= n,
    hasNumber: v => /\d/.test(v),
    hasUpper: v => /[A-Z]/.test(v),
    hasLower: v => /[a-z]/.test(v),
    zip: v => /^[0-9]{5}(-[0-9]{4})?$/.test(v),
    cardNumber: v => /^[\d\s]{13,19}$/.test(v.replace(/\s/g, '')),
    cvv: v => /^\d{3,4}$/.test(v),
    expiry: v => /^(0[1-9]|1[0-2])\/\d{2}$/.test(v),
};

/**
 * Displays an error message below a form input field.
 * @param {HTMLElement} input - The DOM input element to target.
 * @param {string} msg - The text of the error message to display.
 */
function showFieldError(input, msg) {
    input.classList.add('!border-red-500', '!ring-red-500');
    input.classList.remove('border-slate-300', 'dark:border-slate-700');
    let errEl = input.parentElement.querySelector('.field-error');
    if (!errEl) {
        errEl = document.createElement('p');
        errEl.className = 'field-error text-red-500 text-xs mt-1 flex items-center';
        input.parentElement.appendChild(errEl);
    }
    errEl.innerHTML = `<span class="material-symbols-outlined text-sm mr-1">error</span>${msg}`;
}

/**
 * Clears any existing error messages and reset styles for a form input field.
 * @param {HTMLElement} input - The DOM input element to clear.
 */
function clearFieldError(input) {
    input.classList.remove('!border-red-500', '!ring-red-500');
    input.classList.add('border-slate-300', 'dark:border-slate-700');
    const errEl = input.parentElement.querySelector('.field-error');
    if (errEl) errEl.remove();
}

/* ── Capslock Detection ───────────────────────────────── */
/**
 * Initializes CapsLock detection on the provided array of input elements.
 * Displays a warning message when CapsLock is engaged during typing.
 * @param {NodeList|Array<HTMLElement>} inputs - A collection of password inputs.
 */
function setupCapsLockDetection(inputs) {
    inputs.forEach(input => {
        if (!input) return;
        const handler = (e) => {
            let warnEl = input.parentElement.querySelector('.caps-warn');
            const capsOn = e.getModifierState && e.getModifierState('CapsLock');
            if (capsOn) {
                if (!warnEl) {
                    warnEl = document.createElement('p');
                    warnEl.className = 'caps-warn text-yellow-500 text-xs mt-1 flex items-center font-medium';
                    warnEl.innerHTML = '<span class="material-symbols-outlined text-sm mr-1">keyboard_capslock</span> CAPS LOCK IS ON';
                    input.parentElement.appendChild(warnEl);
                }
            } else if (warnEl) {
                warnEl.remove();
            }
        };
        input.addEventListener('keyup', handler);
        input.addEventListener('keydown', handler);
        input.addEventListener('input', () => clearFieldError(input));
    });
}

/* ── Password Toggle ──────────────────────────────────── */
/**
 * Toggles the visibility state of a password input between text and password.
 * @param {HTMLElement} btn - The toggle button element.
 * @param {HTMLElement} input - The target password input element.
 */
function setupPasswordToggle(btn, input) {
    if (!btn || !input) return;
    btn.addEventListener('click', () => {
        const icon = btn.querySelector('span');
        if (input.type === 'password') {
            input.type = 'text';
            icon.textContent = 'visibility_off';
        } else {
            input.type = 'password';
            icon.textContent = 'visibility';
        }
    });
}

/* ── Password Strength Indicator ──────────────────────── */
/**
 * Sets up a dynamic password strength indicator.
 * @param {HTMLElement} input - The password input to monitor.
 * @param {HTMLElement} container - The DOM container where the indicator will be rendered.
 */
function setupPasswordStrength(input, container) {
    if (!input || !container) return;
    input.addEventListener('input', () => {
        const val = input.value;
        let score = 0;
        if (val.length >= 8) score++;
        if (/\d/.test(val)) score++;
        if (/[A-Z]/.test(val)) score++;
        if (/[^A-Za-z0-9]/.test(val)) score++;
        const colors = ['bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-green-500'];
        const labels = ['Weak', 'Fair', 'Good', 'Strong'];
        container.innerHTML = `
            <div class="flex space-x-1 mt-2">${[0, 1, 2, 3].map(i => `<div class="h-1 flex-1 rounded-full ${i < score ? colors[Math.min(score - 1, 3)] : 'bg-slate-200 dark:bg-slate-700'}"></div>`).join('')}</div>
            <p class="text-xs mt-1 ${score <= 1 ? 'text-red-500' : score <= 2 ? 'text-orange-500' : score <= 3 ? 'text-yellow-500' : 'text-green-500'}">${val.length > 0 ? labels[Math.min(score - 1, 3)] || 'Too short' : ''}</p>`;
    });
}

/* ── OTP Input Handler ────────────────────────────────── */
/**
 * Initializes OTP (One Time Password) input fields with auto-advance and paste behaviors.
 */
function setupOTPInputs() {
    const inputs = document.querySelectorAll('.otp-input');
    inputs.forEach((input, i) => {
        input.addEventListener('input', (e) => {
            const val = e.target.value.replace(/\D/g, '');
            e.target.value = val.slice(0, 1);
            if (val && i < inputs.length - 1) inputs[i + 1].focus();
        });
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !e.target.value && i > 0) inputs[i - 1].focus();
        });
        input.addEventListener('paste', (e) => {
            e.preventDefault();
            const paste = (e.clipboardData || window.clipboardData).getData('text').replace(/\D/g, '');
            paste.split('').forEach((ch, j) => { if (inputs[i + j]) inputs[i + j].value = ch; });
            if (inputs[Math.min(i + paste.length, inputs.length - 1)]) inputs[Math.min(i + paste.length, inputs.length - 1)].focus();
        });
    });
}

/* ── Filter Toggle ────────────────────────────────────── */
/**
 * Toggles the visibility constraint (expand/collapse) of a sidebar filter accordion.
 * @param {HTMLElement} btn - The accordion header button triggered.
 */
function toggleFilter(btn) {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector('.filter-icon');
    content.classList.toggle('open');
    icon.textContent = content.classList.contains('open') ? 'expand_less' : 'expand_more';
}

/* ── Tab System ───────────────────────────────────────── */
/**
 * Handles the switching mechanism for tabbed interfaces.
 * @param {string} tabGroup - The data-tab-group identifier managing these tabs.
 * @param {string} tabKey - The specific data-tab identifier to activate.
 */
function switchTab(tabGroup, tabKey) {
    document.querySelectorAll(`[data-tab-group="${tabGroup}"] .tab-btn`).forEach(b => {
        b.classList.remove('active', 'text-slate-900', 'border-slate-900', 'dark:text-white', 'dark:border-white');
        b.classList.add('text-slate-400', 'border-transparent');
    });
    document.querySelectorAll(`[data-tab-group="${tabGroup}"] .tab-panel`).forEach(p => {
        p.classList.remove('active', 'block');
        p.classList.add('hidden');
    });

    const targetBtn = document.querySelector(`[data-tab-group="${tabGroup}"] [data-tab="${tabKey}"]`);
    if (targetBtn) {
        targetBtn.classList.add('active', 'text-slate-900', 'border-slate-900', 'dark:text-white', 'dark:border-white');
        targetBtn.classList.remove('text-slate-400', 'border-transparent');
    }

    const targetPanel = document.getElementById(`panel-${tabKey}`);
    if (targetPanel) {
        targetPanel.classList.add('active', 'block');
        targetPanel.classList.remove('hidden');
    }
}

/* ── Card Number Formatting ───────────────────────────── */
function formatCardNumber(input) {
    if (!input) return;
    input.addEventListener('input', () => {
        let val = input.value.replace(/\D/g, '').slice(0, 16);
        input.value = val.replace(/(\d{4})(?=\d)/g, '$1 ');
    });
}

function formatExpiry(input) {
    if (!input) return;
    input.addEventListener('input', () => {
        let val = input.value.replace(/\D/g, '').slice(0, 4);
        if (val.length >= 2) val = val.slice(0, 2) + '/' + val.slice(2);
        input.value = val;
    });
}

/* ── Search System ────────────────────────────────────── */
/**
 * Quickly filters down the product array based on a combined attribute query search.
 * @param {string} query - The search term to match against product properties.
 * @returns {Array<Object>} Array of matching products.
 */
function searchProducts(query) {
    const q = query.toLowerCase();
    return PRODUCTS.filter(p =>
        p.name.toLowerCase().includes(q) ||
        p.brand.toLowerCase().includes(q) ||
        p.category.toLowerCase().includes(q)
    );
}

/* ── Mobile Shop Dropdown Toggle ─────────────────────────── */
function toggleMobileShopMenu() {
    const menu = document.getElementById('mobileShopMenu');
    const chevron = document.getElementById('mobileShopChevron');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.classList.add('block');
        chevron.classList.add('rotate-180');
    } else {
        menu.classList.add('hidden');
        menu.classList.remove('block');
        chevron.classList.remove('rotate-180');
    }
}

/* ── Promotional Countdown Clocks ────────────────────────── */
/**
 * Drives the promotional HTML banners automatically until 7 days expiry.
 */
document.addEventListener('DOMContentLoaded', () => {
    const countdownDays = document.querySelectorAll('.countdown-days');
    if (countdownDays.length > 0) {
        const targetDate = new Date();
        targetDate.setDate(targetDate.getDate() + 7);

        setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate.getTime() - now;
            if (distance < 0) return;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.querySelectorAll('.countdown-days').forEach(el => el.textContent = days.toString().padStart(2, '0'));
            document.querySelectorAll('.countdown-hours').forEach(el => el.textContent = hours.toString().padStart(2, '0'));
            document.querySelectorAll('.countdown-mins').forEach(el => el.textContent = minutes.toString().padStart(2, '0'));
            document.querySelectorAll('.countdown-secs').forEach(el => el.textContent = seconds.toString().padStart(2, '0'));
        }, 1000);
    }

    // Initialize Animated Counters
    initCounters();
});

/* ── Counter Up Animation Handler ─────────────────────── */
/**
 * Initializes count-up animations for statistic elements containing data-target attributes.
 * Triggers sequentially when elements enter the viewport via IntersectionObserver.
 */
function initCounters() {
    const counters = document.querySelectorAll('.counter-value');
    if (!counters.length) return;

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target'), 10);
                const duration = 2000; // Animation duration in ms
                const stepTime = Math.abs(Math.floor(duration / target));

                let current = 0;
                const timer = setInterval(() => {
                    current += 1;
                    counter.innerText = current;
                    if (current === target) {
                        clearInterval(timer);
                    }
                }, stepTime);

                observer.unobserve(counter); // Only run once
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}
