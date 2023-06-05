function splitText(text, maxLength) {
    if (text.length <= maxLength) {
        return [text.trim()]; // Return the original text if its length is smaller or equal to maxLength (with leading/trailing white space removed)
    }

    const sentences = text.match(/[^.!?]+[.!?]+/g); // Split the text into sentences
    const parts = [];
    let part = '';

    for (let i = 0; i < sentences.length; i++) {
        const sentence = sentences[i];

        if (part.length + sentence.length <= maxLength) {
            part += (part.length > 0 ? ' ' : '') + sentence; // Add the sentence to the current part
        } else {
            parts.push(part.trim()); // Add the current part to the parts array (with leading/trailing white space removed)
            part = sentence; // Start a new part with the current sentence
        }
    }

    if (part.length > 0) {
        parts.push(part.trim()); // Add the last part to the parts array (with leading/trailing white space removed)
    }

    return parts;
}
