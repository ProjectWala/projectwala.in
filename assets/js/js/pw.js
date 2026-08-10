

function copyToClipboard(text) {
  navigator.clipboard.writeText(text)
    .then(() => console.log("Copied!"))
    .catch(err => console.error("Copy failed:", err));
}
function openWhatsApp(rawNumber, message = '', inNewTab = true) {
  if (!rawNumber) {
    console.error('Phone number required');
    return;
  }

  // remove all non-digit characters
  let digits = rawNumber.replace(/\D/g, '');

  // Handle common Indian formats:
  // If number has 10 digits -> assume local Indian number and add country code 91
  // If number has 11 digits and starts with 0 -> strip leading 0 and add 91
  // If number has 12 digits and starts with 91 -> assume correct
  // If number has more digits, pass as-is (but warn)
  if (digits.length === 10) {
    digits = '91' + digits;
  } else if (digits.length === 11 && digits.startsWith('0')) {
    digits = '91' + digits.slice(1);
  } else if (digits.length === 12 && digits.startsWith('91')) {
    // ok
  } else {
    // allow some flexibility but warn developer
    console.warn('Phone number not in typical Indian formats; using digits as-is:', digits);
  }

  // final validation: digits should contain only numbers and be at least 11-15 digits
  if (!/^\d+$/.test(digits) || digits.length < 11) {
    console.error('Invalid phone number after normalization:', digits);
    return;
  }

  // build wa.me URL (recommended)
  const base = 'https://wa.me/';
  const encodedMessage = message ? '?text=' + encodeURIComponent(message) : '';
  const url = `${base}${digits}${encodedMessage}`;

  // open in new tab or same window
  if (inNewTab) {
    window.open(url, '_blank', 'noopener,noreferrer');
  } else {
    window.location.href = url;
  }
}
