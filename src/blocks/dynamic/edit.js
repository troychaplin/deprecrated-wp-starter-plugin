import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	// Add classes to block props
	const multiBlockProps = useBlockProps({
		className: 'multi-block',
	});

	// Destructure block attributes
	const { cyanBackground } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title="Block Options">
					<ToggleControl
						label="Cyan Background"
						checked={cyanBackground}
						onChange={(value) =>
							setAttributes({ cyanBackground: value })
						}
					/>
					<p>
						To add more block option type see{' '}
						<a
							href="https://wordpress.github.io/gutenberg/?path=/story/docs-introduction--page"
							target="_blank"
							rel="noreferrer"
						>
							Gutenberg Component Library
						</a>
					</p>
				</PanelBody>
				<PanelBody title="Secondary Options">
					<p>You can add multiple panels and group options</p>
				</PanelBody>
			</InspectorControls>

			<div {...multiBlockProps}>
				<div className={cyanBackground ? 'bg-cyan-800' : 'bg-white'}>
					<p
						className={
							cyanBackground
								? 'px-6 py-4 rounded-md shadow-md text-white'
								: 'text-cyan-800'
						}
					>
						Example Static: Hello from the editor!
					</p>
				</div>
			</div>
		</>
	);
}
