import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import save from './save';
import Edit from './edit';
import metadata from './block.json';
const { name } = metadata;

registerBlockType(name, {
    edit: Edit,
    save,
});
