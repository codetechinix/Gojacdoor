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

function clearFieldError(input) {
    input.classList.remove('!border-red-500', '!ring-red-500');
    input.classList.add('border-slate-300', 'dark:border-slate-700');
    const errEl = input.parentElement.querySelector('.field-error');
    if (errEl) errEl.remove();
}

/* ── Capslock Detection ───────────────────────────────── */
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
function toggleFilter(btn) {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector('.filter-icon');
    content.classList.toggle('open');
    icon.textContent = content.classList.contains('open') ? 'expand_less' : 'expand_more';
}

/* ── Tab System ───────────────────────────────────────── */
function switchTab(tabGroup, tabKey) {
    document.querySelectorAll(`[data-tab-group="${tabGroup}"] .tab-btn`).forEach(b => b.classList.remove('active'));
    document.querySelectorAll(`[data-tab-group="${tabGroup}"] .tab-panel`).forEach(p => p.classList.remove('active'));
    document.querySelector(`[data-tab-group="${tabGroup}"] [data-tab="${tabKey}"]`)?.classList.add('active');
    document.getElementById(`panel-${tabKey}`)?.classList.add('active');
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
function searchProducts(query) {
    const q = query.toLowerCase();
    return PRODUCTS.filter(p =>
        p.name.toLowerCase().includes(q) ||
        p.brand.toLowerCase().includes(q) ||
        p.category.toLowerCase().includes(q)
    );
}
